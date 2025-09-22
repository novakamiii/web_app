<?php
include "database.php";

$sql6 = "SELECT COUNT(*) as total from cart";
$result2 = mysqli_query($conn, $sql6);
$row2 =  mysqli_fetch_assoc($result2);
$total_cart_num = $row2['total'];



#Add to cart method
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $prod_name = filter_input(INPUT_POST, "prod_name", FILTER_SANITIZE_SPECIAL_CHARS);

    $query = "SELECT * FROM products WHERE prod_name = '$prod_name'";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $cartItem = $row['prod_name'];
        $cartPrice = $row['price'];

        $query2 = "INSERT INTO cart (`prod_name`, `quantity`, `price`)
                   VALUES ('$cartItem', 1, '$cartPrice')";

        if (mysqli_query($conn, $query2)) {
            echo "<script>alert('{$cartItem} added to cart!');</script>";
        } else {
            echo "<script>alert('Something went wrong!');</script>";
        }
    }
}

# Remove from cart
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['cart_item'])) {
    $cart_item = filter_input(INPUT_POST, 'cart_item', FILTER_SANITIZE_SPECIAL_CHARS);

    $delete_query = "DELETE FROM cart WHERE prod_name = '$cart_item' LIMIT 1";
    if (mysqli_query($conn, $delete_query)) {
        echo "<script>alert('{$cart_item} removed from cart!');</script>";
        // Optional: refresh the page to update the cart
        echo "<script>window.location.href = 'cart.php';</script>";
    } else {
        echo "<script>alert('Failed to remove item.');</script>";
    }
}


function showCart()
{
    global $conn;

    $query = "SELECT * FROM cart";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $prod_name = $row['prod_name'];
        $price = $row['price'];
        echo "<tr>
                <td>{$prod_name}</td>
                <td class=\"price\" data-price=\"{$price}\">\${$price}.00</td>
                <td><input type=\"number\" class=\"form-control w-50 mx-auto qty\" value=\"1\" min=\"1\"></td>
                <td class=\"total\">$/{$price}.00</td>
                <td>
                    <form action=\"cart.php\" method=\"post\">
                        <input type=\"hidden\" name=\"cart_item\" value=\"{$prod_name}\">
                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Remove</button>
                    </form>
                </td>
              </tr>";
    }
}
