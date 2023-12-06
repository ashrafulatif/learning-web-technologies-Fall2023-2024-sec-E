<?php
session_start();
require_once ("../model/userModel.php");

$id = $_REQUEST['id'];

    $result = availableIdCheck($id);

    if (!$result) {
        echo 'already taken! Try another.';
    } 
?>