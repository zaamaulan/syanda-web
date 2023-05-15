<?php
session_start();
if (!isset($_SESSION['login'])) {
  $afterLogin = 'hidden';
} else {
  $beforeLogin = 'hidden';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="../styles/style.css">
</head>

<body class="font-inter ease-in-out">
  <nav class="flex justify-between px-32 py-5 items-center sticky top-0 bg-white backdrop-filter backdrop-blur-lg bg-opacity-70 z-50">
    <div class="flex items-center text-xl"><img src="../../../public/icons/logo.png" alt="" width="46px">
      <h1 class="ml-4 text-xl">Animers Majalengka</h1>
    </div>
    <div class="flex gap-x-20 items-center">
      <h1 class="hover:text-indigo-500 transition hover:scale-[1.10]"><a href="../">Home</a></h1>
      <h1 class="hover:text-indigo-500 transition  hover:scale-[1.10]"><a href="#">Comunity Activity</a></h1>
      <h1 class="hover:text-indigo-500 transition text-violet-500 hover:scale-[1.10]">Event</h1>
      <a href="../auth/sign-in.php" class="<?= $beforeLogin ?>">
        <button class="bg-indigo-500 text-white px-8 py-3 rounded-full hover:bg-white hover:text-indigo-500 hover:border-2 hover:border-indigo-500 transition border-2 border-indigo-500">Join Us</button></a>
      <a href="../api/sign-out.php" class="<?= $afterLogin ?> hover:text-red-500 transition duration-300 ">
        <button>Sign Out</button>
      </a>
    </div>
  </nav>
</body>

</html>