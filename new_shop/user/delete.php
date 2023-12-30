<?php
session_start();
require_once '../function/function.php';
delete_session('user');
header("Location:../index.php");