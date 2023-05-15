<?php
include '../api/sign-in.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <link rel="stylesheet" href="../styles/style.css">
</head>

<body class="bg-stone-50 font-inter">
  <div class="flex justify-center items-center h-screen ">
    <form action="" method="post" class="flex flex-col bg-white px-24 py-14 rounded-md ">
      <h1 class="text-4xl text-center mb-10 font-semibold">Sign In</h1>
      <div class="mb-6 text-md w-full mx-auto">
        <label for="email">Email</label>
        <input type="email" name="email" id="" class="border-2 border-gray-200 focus:outline-2 focus:outline-indigo-500 px-3 py-1.5 rounded-lg w-full" require>
      </div>
      <div class="mb-3 text-md w-full mx-auto">
        <label for="password">Password</label>
        <input type="password" name="password" id="" class="border-2 border-gray-200 focus:outline-2 focus:outline-indigo-500 px-3 py-1.5 rounded-lg w-full" require>
      </div>
      <h1 class="text-sm text-right mb-10">Belum Punya Akun? <a href="sign-up.php" class="text-indigo-600 ">Sign Up</a></h1>
      <input type="submit" value="Sign In" class="px-6 py-2.5 bg-indigo-500 text-white font-semibold hover:bg-indigo-600 transition rounded-lg w-full mx-auto">
    </form>
  </div>
</body>

</html>