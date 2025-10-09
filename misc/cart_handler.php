<?php
include "database.php";


//i dont want to touch this
$sql6 = "SELECT COUNT(*) as total from cart";
$result2 = mysqli_query($conn, $sql6);
$row2 =  mysqli_fetch_assoc($result2);
$total_cart_num = $row2['total'];



// #Add to cart method
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     $prod_name = filter_input(INPUT_POST, "prod_name", FILTER_SANITIZE_SPECIAL_CHARS);

//     $query = "SELECT * FROM products WHERE prod_name = '$prod_name'";
//     $result = mysqli_query($conn, $query);

//     if ($row = mysqli_fetch_assoc($result)) {
//         $cartItem = $row['prod_name'];
//         $cartPrice = $row['price'];

//         $query2 = "INSERT INTO cart (`prod_name`, `quantity`, `price`)
//                    VALUES ('$cartItem', 1, '$cartPrice')";

//         if (mysqli_query($conn, $query2)) {
//             echo "<script>alert('{$cartItem} added to cart!');</script>";
//         } else {
//             echo "<script>alert('Something went wrong!');</script>";
//         }
//     }
// }

if (isset($_GET['action']) && $_GET['action'] === 'add' && isset($_GET['id'])) {
    $id = intval($_GET['id']); // sanitize input

    // fetch product
    $query = "SELECT * FROM products WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $prod_name = $row['prod_name'];
        $price = $row['price'];

        // check if already in cart
        $checkQuery = "SELECT * FROM cart WHERE prod_name = '$prod_name' LIMIT 1";
        $checkResult = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            // product already in cart → update quantity
            $updateQuery = "UPDATE cart 
                            SET quantity = quantity + 1 
                            WHERE prod_name = '$prod_name'";
            mysqli_query($conn, $updateQuery);
        } else {
            // add new item
            $insertQuery = "INSERT INTO cart (prod_name, quantity, price) 
                            VALUES ('$prod_name', 1, '$price')";
            mysqli_query($conn, $insertQuery);
        }

        echo "<script>alert('{$prod_name} added to cart!'); event.preventDefault();</script>";
    } else {
        echo "<script>alert('Product not found.'); window.location='product.php';</script>";
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

#Proceed to Checkout
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['checkout'])) {
    #$checkout = filter_input(INPUT_POST, 'checkout', FILTER_SANITIZE_SPECIAL_CHARS);
    $checkout = true;
    $query = "TRUNCATE TABLE cart";
    if (mysqli_query($conn, $query) && $checkout) {
        echo "<script>alert(\"Thank you for shopping with us!\")</script>";
    } else {
        echo "<script>Something went wrong!</script>";
    }
}

function showCartTotal ()
{
    $carttotal = <<<HTML
            <!-- Cart Summary -->
            <div class="text-end mt-4 cart-total">
                <h4 id="cart-total">Total: $0.00</h4>
                <form action="cart.php" method="post">
                    <input type="hidden" name="checkout" value="checkout">
                    <button type="submit" class="btn btn-success"> Proceed to Checkout</button>
                </form>
            </div>
    HTML;

    echo $carttotal;
}

//u already have one why do you have to create a function just for that
//i do not know
function getCartCount()
{
    global $conn;
    $query = "SELECT COUNT(*) AS counted FROM cart";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return (int)$row['counted'];
}



function showCart()
{
    global $conn;

    $count = "SELECT COUNT(*) as counted FROM cart;";
    $countres = mysqli_query($conn, $count);
    $countrow = mysqli_fetch_assoc($countres);
    $counted = getCartCount();

    if ($counted == 0)
    {
        $html = <<<HTML
            <h1 class="h1 text-center">You have no items in your cart!</h1>
            <br>
            <img class="mx-auto d-block" src="img/empty-cart.png" alt="no items" height=100>
            <script>
                $(".cart").hide();
            </script>
        HTML;
        echo $html;
    }
    else
    {
        $query = "SELECT * FROM cart";
        $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            $prod_name = $row['prod_name'];
            $price = $row['price'];
            $amount = $row['quantity'];

            //TODO: FIX THIS
            //done
            $html = <<<HTML
                        <tr>
                            <td>{$prod_name}</td>
                            <td class="price" data-price="$price">\${$price}.00</td>
                            <td><input type="number" class="form-control w-50 mx-auto qty" value="$amount" min="1"></td>
                            <td class="total">\${$price}.00</td>
                            <td>
                                <form action="cart.php" method="post">
                                    <input type="hidden" name="cart_item" value="$prod_name">
                                    <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                </form>
                            </td>
                        </tr>            
               HTML;
            
                echo $html;
       }
    }
}
