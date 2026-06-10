<?php
session_start();
include 'includes/db.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user['password'])){

        $_SESSION['user'] = $user['fullname'];

        header("Location: dashboard.php");

    } else {

        echo "Invalid Email or Password ❌";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

<div class="card">

<h2>Login</h2>

<form method="POST">

<input type="email"
       name="email"
       placeholder="Email"
       required>

<br><br>

<input type="password"
       name="password"
       placeholder="Password"
       required>

<br><br>

<button name="login">Login</button>

</form>

<br>

<a href="register.php">
Create Account
</a>

</div>

</div>

<script src="js/script.js"></script>

</body>
</html>