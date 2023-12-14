<?php
require_once '../function/function.php';

$id = $_POST['id'];

delete_cards($id);
header('Location: delete.php');



