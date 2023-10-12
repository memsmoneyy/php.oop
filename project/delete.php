<?php
include 'headAndFoot\header.php';
require 'function.php';

    if (!isset($_POST['id'])) {
        include "not_found.php";
        exit;
    }
    $userId = $_POST['id'];
    deleteUser($userId);

    header("Location: Dashboard.php");

include 'headAndFoot\header.php';
?>