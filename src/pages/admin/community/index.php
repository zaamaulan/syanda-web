<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: ../../');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrator</title>
  <link rel="stylesheet" href="../../styles/style.css">
</head>

<body class="font-inter">
  <nav class="flex flex-col lg:flex-row justify-between px-8  lg:px-32 py-5 items-center sticky top-0 bg-white backdrop-filter backdrop-blur-lg bg-opacity-70 z-50 gap-y-8">
    <div class="items-center text-xl hidden md:flex ">
      <img src="../../../../public/icons/logo.png" alt="" width="46px">
      <p class="ml-4 text-xl">Animers Majalengka</p>
    </div>
    <div class="flex gap-8 lg:gap-x-20 items-center overflow-x-visible text-sm lg:text-base flex-wrap md:flex-nowrap gap-y-10 justify-center lg:justify-normal">
      <p class="hover:text-indigo-500 transition hover:scale-[1.05] "><a href="../">Dashboard</a> </p>
      <p class="hover:text-emerald-500 transition  hover:scale-[1.05] text-emerald-500"><a href="">Control Activity</a></p>
      <p class="hover:text-orange-500 transition  hover:scale-[1.05]"><a href="../data/">Info Data</a></p>
      <p class="hover:text-violet-500 transition hover:scale-[1.05] group "><a href="../manage event/">Manage Event <span class="absolute opacity-0 group-hover:opacity-100 transition">🎉</span></a></p>
      <a href="../../api/sign-out.php" class="<?= $afterLogin ?> hover:text-red-500 transition duration-300 ">
        <button onclick="return confirm('Kamu yakin ingin Sign-Out?')">Sign Out</button>
      </a>
    </div>
  </nav>
  <section class="flex justify-center items-center h-[80vh]">
    <p class="text-2xl lg:text-7xl font-extralight">Control Community Activity</p>
  </section>
</body>

</html>