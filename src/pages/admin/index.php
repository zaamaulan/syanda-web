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
  <link rel="stylesheet" href="../styles/style.css">
</head>

<body class="font-inter">
  <nav class="flex justify-between px-32 py-5 items-center sticky top-0 bg-white backdrop-filter backdrop-blur-lg bg-opacity-70 z-50">
    <div class="flex items-center text-xl"><img src="../../../public/icons/logo.png" alt="" width="46px">
      <h1 class="ml-4 text-xl">Animers Majalengka</h1>
    </div>
    <div class="flex gap-x-20 items-center">
      <h1 class="hover:text-indigo-500 transition text-indigo-500 hover:scale-[1.05]"><a href="">Dashboard</a></h1>
      <h1 class="hover:text-emerald-500 transition hover:scale-[1.05]"><a href="community/">Control Community</a></h1>
      <h1 class="hover:text-orange-500 transition  hover:scale-[1.05]"><a href="data/">Info Data</a></h1>
      <h1 class="hover:text-violet-500 transition hover:scale-[1.05] group"><a href="manage event/">Manage Event</a></h1>
      <a href="../api/sign-out.php" class="<?= $afterLogin ?> hover:text-red-500 transition duration-300 ">
        <button>Sign Out</button>
      </a>
    </div>
  </nav>
  <section class="bg-stone-50 h-[90vh] pt-10 px-28">
    <div class="mb-10">
      <h1 class="text-3xl">Selamat Datang di Halaman Administrator!</h1>
      <h1 class="text-xl">Kamu Sign In Sebagai <?php echo $_SESSION['username'] ?></h1>
    </div>
    <div class="flex gap-10">
      <div class="flex flex-col justify-between basis-1/2 bg-white px-8 py-12 rounded-xl h-[300px] group">
        <div class=" flex flex-col ">
          <h1 class="text-4xl font-base">Data Akun Users</h1>
          <h1 class="text-lg text-stone-500 font-extralight group-hover:opacity-100 opacity-0 -translate-y-8 transition group-hover:translate-y-0">Lihat semua data akun user yang terdaftar.</h1>
        </div>
        <a href="data/" class="flex justify-end items-end">
          <button class="hover:bg-white hover:text-violet-500 px-5 py-1 rounded-xl bg-violet-500 text-white hover:border-2 hover:border-violet-500 transition border-2 border-violet-500 ">Pergi</button>
        </a>
      </div>
      <div class="flex flex-col justify-between basis-1/2 bg-white px-8 py-12 rounded-xl h-[300px] group">
        <div class=" flex flex-col ">
          <h1 class="text-4xl font-base">Control <br> Community Activity</h1>
          <h1 class="text-lg text-stone-500 font-extralight group-hover:opacity-100 opacity-0 -translate-y-8 transition group-hover:translate-y-0">Kontrol Community Activity.</h1>
        </div>
        <a href="community/" class="flex justify-end items-end">
          <button class="hover:bg-white hover:text-violet-500 px-5 py-1 rounded-xl bg-violet-500 text-white hover:border-2 hover:border-violet-500 transition border-2 border-violet-500 ">Pergi</button>
        </a>
      </div>
      <div class="flex flex-col justify-between basis-1/2 bg-white px-8 py-12 rounded-xl h-[300px] group">
        <div class=" flex flex-col ">
          <h1 class="text-4xl font-base">Control Events</h1>
          <h1 class="text-lg text-stone-500 font-extralight group-hover:opacity-100 opacity-0 -translate-y-8 transition group-hover:translate-y-0">Kontrol semua Event yang akan diadakan.</h1>
        </div>
        <a href="manage event/" class="flex justify-end items-end">
          <button class="hover:bg-white hover:text-violet-500 px-5 py-1 rounded-xl bg-violet-500 text-white hover:border-2 hover:border-violet-500 transition border-2 border-violet-500 ">Pergi</button>
        </a>
      </div>
      <!-- <a href="">
        <div class="bg-white flex flex-col px-8 py-12 w-[500px] h-[300px] rounded-xl">
          <h1 class="text-4xl font-base">Community Activity</h1>
          <h1 class="text-lg text-stone-500 font-extralight">Kontrol Community Activity.</h1>
        </div>
      </a>
      <a href="manage event/">
        <div class="bg-white flex flex-col px-8 py-12 w-[500px] h-[300px] rounded-xl">
          <h1 class="text-4xl font-base">Kontrol Event</h1>
          <h1 class="text-lg text-stone-500 font-extralight">Kontrol semua event yang akan diadakan.</h1>
        </div>
      </a> -->
    </div>
  </section>
</body>

</html>