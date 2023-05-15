<?php
include 'connection.php';

session_start();
$_SESSION['Log In'] = false;
session_destroy();
header('location: ../index.php');
