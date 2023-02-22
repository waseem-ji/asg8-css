<?php
session_start();





// Tocheck if entered exists in the databbase
function isValidEmail($email) {
    $conn = dbconnect();
    $sql = "SELECT email FROM users WHERE email='$email'";
    $queryResult = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($queryResult);
    if($count>0) {
        return true;
    }
    else {
        return false;
    }
}


// -------- Check If login credentials are correct
function checkLoginCred($email,$password) {
    $conn = dbconnect();
    $sql = "SELECT password FROM users WHERE email='$email' ";
    $queryResult = mysqli_query($conn,$sql);
    $hashPass = mysqli_fetch_column($queryResult);
    // $count = mysqli_num_rows($queryResult);
    return password_verify($password,$hashPass);
}

// ---------- Create a new user
function createUser($email,$password,$firstname,$lastname) {
    $conn = dbconnect();

    $securePass = encryptPassword($password);

    $sql = "INSERT INTO users (email,password,firstname,lastname) VALUES ('$email','$securePass','$firstname','$lastname')";
    $queryResult = mysqli_query($conn,$sql);
    return $queryResult;
}

// Create function to encrpt password
function encryptPassword($password) 
{
    return password_hash($password, PASSWORD_BCRYPT);
     
}

?>