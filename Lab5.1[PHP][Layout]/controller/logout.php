<?php
    session_start();
    //unlike($_SESSION['flag']);
    unset($_SESSION['flag']);
    header('location: ../views/login.php');
?>