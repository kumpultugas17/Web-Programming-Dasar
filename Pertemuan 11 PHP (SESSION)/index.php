<?php
    session_start();
    if ($_SESSION['pw'] != '123456') {
        header('Location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Menu</h3>
    <ul>
        <li><a href="show_1.php">Show 1</a></li>
        <li><a href="show_2.php">Show 2</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>