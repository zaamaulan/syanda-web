<?php


include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   $errorEmail = $errorUsername = '';

   if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username']) && isset($_POST['no_whatsapp'])) {
      $email = $_POST['email'];
      $password = md5($_POST['password']);
      $username = $_POST['username'];
      $whatsappNum = $_POST['no_whatsapp'];
   } else {
      $errorname;
      $errorUsername;
   }

   $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
      $errorEmail = 'Email sudah terdaftar';
      $errorUsername = 'Username sudah ada';
   } else {
      $insert = "INSERT INTO users (username, email, password, no_whatsapp) VALUES ('$username', '$email', '$password', '$whatsappNum')";
      mysqli_query($conn, $insert);
      header('location: ../auth/');
   }
   $conn->close();
}
