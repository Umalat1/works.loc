<?php

session_start();

$name = $_POST['name'];

$_SESSION['name'] = $name;

header("Location:index.php");
