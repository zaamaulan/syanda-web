<?php

session_start();

include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
  } else {
    $email = '';
    $password = '';
  }

  $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      session_start();
      $_SESSION['username'] = $row['username'];
      $_SESSION['email'] = $email;
      $_SESSION['login'] = true;

      if ($row['role'] == 'admin') {
        header('location: ../admin/');
        exit();
      } else {
        header('location: ../');
        exit();
      }
    }
  } else {
    $error =  "Invalid email or password";
  }

  $conn->close();
}
