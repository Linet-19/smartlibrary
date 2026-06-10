<?php
include 'includes/db.php';

if(isset($_POST['register'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(fullname, email, password)
            VALUES('$fullname', '$email', '$password')";

    mysqli_query($conn, $sql);

    echo "Registration Successful 🎉";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>

<body>

<h2>User Registration</h2>

<form method="POST">

    <input type="text"
           name="fullname"
           placeholder="Full Name"
           required>

    <br><br>

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

    <button name="register">
        Register
    </button>

</form>

</body>
</html>