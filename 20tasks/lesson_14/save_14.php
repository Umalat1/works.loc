<?php
    session_start();

    $_SESSION['counter'] = (int) $_SESSION['counter'] + 1;

    header('location: /20tasks/lesson_14/task_14.php');