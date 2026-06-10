<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="navbar">
    <a href="dashboard.php">🏠 Home</a>
    <a href="books.php">📚 Books</a>
    <a href="borrow.php">📖 Borrow</a>
    <a href="return.php">🔄 Return</a>
    <a href="logout.php">🚪 Logout</a>
</div>

<div class="container">

<div class="card fade-in">

<h1>📚 Welcome to Smart Library</h1>

<p>Logged in as: <b><?php echo $_SESSION['user']; ?></b></p>

<p id="datetime"></p>

<h3 id="quote"></h3>

<button onclick="changeBg()">🎨 Change Mood</button>

</div>

<div class="card">

<h2>📖 Library Rules</h2>

<ul>
<li>Return books on time</li>
<li>Handle books with care</li>
<li>No late damage allowed</li>
</ul>

</div>
</div>

</body>
</html>