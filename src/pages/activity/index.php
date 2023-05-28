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
<nav class="flex flex-col lg:flex-row justify-between px-8  lg:px-32 py-5 items-center sticky top-0 bg-white backdrop-filter backdrop-blur-lg bg-opacity-70 z-50 gap-y-8">
    <div class="items-center text-xl hidden md:flex">
      <img src="../../../public/icons/logo.png" alt="" width="46px">
      <p class="ml-4 text-xl">Animers Majalengka</p>
    </div>
    <div class="flex gap-8 lg:gap-x-20 items-center overflow-x-visible text-sm lg:text-base flex-wrap md:flex-nowrap gap-y-10 justify-center lg:justify-normal">
      <p class="hover:text-indigo-500 transition hover:scale-[1.05]"><a href="../">Home</a> </p>
      <p class="hover:text-emerald-500 transition  hover:scale-[1.05] text-emerald-500 "><a href="">Comunity Activity</a></p>
      <p class="hover:text-violet-500 transition hover:scale-[1.05] group"><a href="../event/">Event <span class="absolute opacity-100 lg:opacity-0 group-hover:opacity-100 transition">🎉</span></a></p>
      <p class="hover:text-cyan-500 transition  hover:scale-[1.05] <?= $afterLogin ?>"><a href="../profile/">Profile</a></p>
      <a href="../auth/sign-in.php" class="<?= $beforeLogin ?>">
        <button class="bg-indigo-500 text-white px-8 py-3 rounded-full hover:bg-white hover:text-indigo-500 hover:border-2 hover:border-indigo-500 transition border-2 border-indigo-500 hidden md:block scale-[0.85] lg:scale-100">Join Us</button></a>
      <a href="../api/sign-out.php" class="<?= $afterLogin ?> hover:text-red-500 transition duration-300 ">
        <button>Sign Out</button>
      </a>
    </div>
  </nav>
  <section class="flex justify-center items-center h-[80vh]">
    <p class="text-2xl lg:text-7xl font-extralight">Control Community Activity</p>
  </section>
</body>

</html>