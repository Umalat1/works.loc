<?php
session_start();

$message = $_POST['message'];

$_SESSION['message'] = $message;
header("location:index.php");
