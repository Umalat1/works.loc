<?php
session_start();

    unset($_SESSION['user']);

    header('location: /20tasks/lesson_16/task_1.php');