<?php

include "../Core/auth.php";
// session_start();
$conn = dbconnect();
if (isset($_POST["login"])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    if (isValidEmail($email)) {
        if (checkLoginCred($email, $password)) {
            $_SESSION["email"] = $email;
            header("Location: /dashboard");
            die();
        } else {
            echo "<script>alert('Login Credentials invalid'); window.location.replace('/');</script>";
        }
    } else {
        echo "<script>alert('No registered users found'); window.location.replace('/');</script>";
    }
} elseif (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $firstname= mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname= mysqli_real_escape_string($conn, $_POST["lastname"]);
    $user_registration = createUser($email, $password, $firstname, $lastname);
    if ($user_registration) {
        $_SESSION['email'] = $email;
        // pop up to confirm new user creation
        header("Location: /settings");
    } else {
        echo "User Registration failed.Please try again later.";
        die();
    }
} else {
    header("Location: /");
    die();
}
