<?php
session_start();
if ($_SESSION['pw'] != '123456') {
    header('Location:login.php');
}

session_unset();
session_destroy();

header('Location:login.php');