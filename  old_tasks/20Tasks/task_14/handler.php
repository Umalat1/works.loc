<?php
session_start();

$button = $_POST['button'];

$_SESSION['button'] = $_SESSION['button'] + 1;
header("Location:index.php");
