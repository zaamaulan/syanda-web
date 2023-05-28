<?php

include 'connection.php';

//mengedit data
$id = $_GET['id'];
$username = $_POST['username'];
$emai = $_POST['email'];

//query ddata
$query = "UPDATE users SET username = '$username', email = '$emai' WHERE id=$id";
$update = mysqli_query($conn, $query);

if ($update) {
  header('location: ../profile/');
} else {
  header('location: ../profile/');
}
