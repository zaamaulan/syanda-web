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
  <nav class="flex flex-col lg:flex-row justify-between px-8  lg:px-32 py-5 items-center sticky top-0 bg-white backdrop-filter backdrop-blur-lg bg-opacity-70 z-50 gap-y-8">
    <div class="items-center text-xl hidden md:flex ">
      <img src="../../../public/icons/logo.png" alt="" width="46px">
      <p class="ml-4 text-xl">Animers Majalengka</p>
    </div>
    <div class="flex gap-8 lg:gap-x-20 items-center overflow-x-visible text-sm lg:text-base flex-wrap md:flex-nowrap gap-y-10 justify-center lg:justify-normal">
      <p class="hover:text-indigo-500 transition hover:scale-[1.05] text-indigo-500"><a href="">Dashboard</a> </p>
      <p class="hover:text-emerald-500 transition  hover:scale-[1.05] "><a href="community/">Control Activity</a></p>
      <p class="hover:text-orange-500 transition  hover:scale-[1.05] "><a href="">Info Data</a></p>
      <p class="hover:text-violet-500 transition hover:scale-[1.05] group "><a href="manage event/">Manage Event <span class="absolute opacity-0 group-hover:opacity-100 transition">🎉</span></a></p>
      <a href="../api/sign-out.php" class="<?= $afterLogin ?> hover:text-red-500 transition duration-300 ">
        <button onclick="return confirm('Kamu yakin ingin Sign-Out?')">Sign Out</button>
      </a>
    </div>
  </nav>
  <section class="bg-stone-50 h-[90vh] pt-10 px-14 lg:px-28">
    <div class="grid">

    </div>
    <div class="mb-10">
      <p class="text-3xl">Selamat Datang di Halaman Administrator!</p>
      <p class="text-xl">Kamu Sign In Sebagai <?php echo $_SESSION['username'] ?></p>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-10">
      <div class="flex flex-col justify-between bg-white px-8 py-12 rounded-xl h-[300px] group">
        <div class=" flex flex-col ">
          <p class="text-4xl font-base">Data Akun Users</p>
          <p class="text-lg text-stone-500 font-extralight lg:group-hover:opacity-100 lg:opacity-0 lg:-translate-y-8 transition lg:group-hover:translate-y-0 translate-y-0">Lihat semua data akun user yang terdaftar.</p>
        </div>
        <a href="data/" class="flex justify-end items-end">
          <button class="hover:bg-white hover:text-violet-500 px-5 py-1 rounded-xl bg-violet-500 text-white hover:border-2 hover:border-violet-500 transition border-2 border-violet-500 ">Pergi</button>
        </a>
      </div>
      <div class="flex flex-col justify-between bg-white px-8 py-12 rounded-xl h-[300px] group">
        <div class=" flex flex-col ">
          <p class="text-4xl font-base">Control <br> Community Activity</p>
          <p class="text-lg text-stone-500 font-extralight lg:group-hover:opacity-100 lg:opacity-0 lg:-translate-y-8 transition lg:group-hover:translate-y-0 translate-y-0">Kontrol Community Activity.</p>
        </div>
        <a href="community/" class="flex justify-end items-end">
          <button class="hover:bg-white hover:text-violet-500 px-5 py-1 rounded-xl bg-violet-500 text-white hover:border-2 hover:border-violet-500 transition border-2 border-violet-500 ">Pergi</button>
        </a>
      </div>
      <div class="flex flex-col justify-between bg-white px-8 py-12 rounded-xl h-[300px] group">
        <div class=" flex flex-col ">
          <p class="text-4xl font-base">Control Events</p>
          <p class="text-lg text-stone-500 font-extralight lg:group-hover:opacity-100 lg:opacity-0 lg:-translate-y-8 transition lg:group-hover:translate-y-0 translate-y-0">Kontrol semua Event yang akan diadakan.</p>
        </div>
        <a href="manage event/" class="flex justify-end items-end">
          <button class="hover:bg-white hover:text-violet-500 px-5 py-1 rounded-xl bg-violet-500 text-white hover:border-2 hover:border-violet-500 transition border-2 border-violet-500 ">Pergi</button>
        </a>
      </div>
    </div>
  </section>
</body>

</html>