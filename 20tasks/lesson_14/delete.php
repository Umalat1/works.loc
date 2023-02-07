<?php
    session_start();
    unset($_SESSION['counter']);
    header('location: /20tasks/lesson_14/task_14.php');