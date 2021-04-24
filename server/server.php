<?php

// initializing variables
$login = "";
$pass = "";
$errors = array();

// connect to the database
$host = "localhost";
$username1 = "root";
$user_pass1 = "";
$database_in_use = "login";
$db = mysqli_connect($host, $username1, $user_pass1, $database_in_use);

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $login = mysqli_real_escape_string($db, $_POST['name']);
    $pass = mysqli_real_escape_string($db, $_POST['password']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($login)) { array_push($errors, "Username is required"); }
    if (empty($pass)) { array_push($errors, "Password is required"); }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM `users` WHERE `login`='$login' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['login'] === $login) {
            array_push($errors, "Username already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($pass);//encrypt the password before saving in the database

        $query = "INSERT INTO users (`id`, `login`, `password`) 
  			  VALUES(NULL, '$login', '$pass')";
        mysqli_query($db, $query);
        $_SESSION['login'] = $login;
        $_SESSION['success'] = "You are now logged in";
        header('location: ../view/index.php');
    }
}

if (isset($_POST['login_user'])) {
    $login = mysqli_real_escape_string($db, $_POST['name']);
    $pass = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($login)) {
        array_push($errors, "Username is required");
    }
    if (empty($pass)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $pass = md5($pass);
        $query = "SELECT * FROM users WHERE `login`='$login' AND `password`='$pass'";
        $results = mysqli_query($db, $query);
        $_SESSION['login'] = $login;
        $_SESSION['success'] = "You are now logged in";
        header('location: ../view/index.php');
    }
}

if (isset($_GET['../view/index.php'])) {

}
?>