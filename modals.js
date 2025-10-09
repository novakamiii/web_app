$(function () {
  // === Open Login Modal ===
  $("#loginBtn").on("click", function () {
    $("#loginModal").fadeIn(200).css("display", "flex");
  });

  // === Close Modals when clicking background ===
  $(".modal-overlay").on("click", function (e) {
    if ($(e.target).is(".modal-overlay")) {
      $(this).fadeOut(200);
    }
  });

  // === Switch from Login -> Sign Up ===
  $("#openSignup").on("click", function (e) {
    e.preventDefault();
    $("#loginModal").fadeOut(150, function () {
      $("#signupModal").fadeIn(200).css("display", "flex");
    });
  });

  // === Switch from Sign Up -> Login ===
  $("#backToLogin").on("click", function (e) {
    e.preventDefault();
    $("#signupModal").fadeOut(150, function () {
      $("#loginModal").fadeIn(200).css("display", "flex");
    });
  });

  // === Login Form Validation ===
  $("#loginForm").validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
      },
    },
    messages: {
      email: "Please enter a valid email address",
      password: "This field is required",
    },
    submitHandler: function (form) {
      alert("Login successful (demo)");
      form.reset();
      $("#loginModal").fadeOut(200);
    },
  });

  // === Sign Up Form Validation ===
  $("#signupForm").validate({
    rules: {
      username: {
        required: true,
        minlength: 3,
      },
      password: {
        required: true,
        minlength: 6,
      },
      retypePassword: {
        required: true,
        equalTo: "#password",
      },
    },
    messages: {
      username: "Please enter at least 3 characters",
      password: "Please enter at least 6 characters",
      retypePassword: "This password does not match",
    },
    submitHandler: function (form) {
      alert("Account created successfully (demo)");
      form.reset();
      $("#signupModal").fadeOut(200);
    },
  });

  // === Restrict invalid characters for Username ===
  $("#username").on("keypress", function (e) {
    const key = String.fromCharCode(e.which);
    const valid = /^[a-zA-Z0-9_]+$/;
    if (!valid.test(key)) e.preventDefault();
  });

  //Contact Form Validation:
  $("#contact").validate({
    rules: {
      name: {
        required: true,
        minlength: 5,
      },
      email: {
        required: true,
        email: true,
      },
      messages: {
        required: true,
      },
    },
    messages: {
      name: "Please enter at least 3 characters",
      email: "Please enter a valid email!",
      messages: "Please input something!",
    },
    submitHandler: function (form) {
      alert("Thank you for sharing your thoughts with us!");
      e.preventDefault();
    },
  })
});
