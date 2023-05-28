<?php
include '../api/connection.php';

session_start();
if (!isset($_SESSION['login'])) {
  $afterLogin = 'hidden';
} else {
  $beforeLogin = 'hidden';
}

$sql = 'SELECT * FROM event ORDER BY tanggal_event ';
$result = mysqli_query($conn, $sql);

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
      <p class="hover:text-emerald-500 transition  hover:scale-[1.05] "><a href="../activity/">Comunity Activity</a></p>
      <p class="hover:text-violet-500 transition hover:scale-[1.05] group text-violet-500"><a href="">Event <span class="absolute opacity-100 lg:opacity-0 group-hover:opacity-100 transition">🎉</span></a></p>
      <p class="hover:text-cyan-500 transition  hover:scale-[1.05] <?= $afterLogin ?>"><a href="../profile/">Profile</a></p>
      <a href="../auth/sign-in.php" class="<?= $beforeLogin ?>">
        <button class="bg-indigo-500 text-white px-8 py-3 rounded-full hover:bg-white hover:text-indigo-500 hover:border-2 hover:border-indigo-500 transition border-2 border-indigo-500 hidden md:block scale-[0.85] lg:scale-100">Join Us</button></a>
      <a href="../api/sign-out.php" class="<?= $afterLogin ?> hover:text-red-500 transition duration-300 ">
        <button onclick="return confirm('Kamu yakin ingin Sign-Out?')">Sign Out</button>
      </a>
    </div>
  </nav>
  <section class="mx-10 md:mx-28 xl:mx-52 my-10 lg:my-20">
    <div class="mb-16 xl:w-2/3">
      <p class="text-xl lg:text-5xl font-light">Berikut adalah beberapa Event yang akan diselenggarakan beberapa hari ke depan</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4  ">
      <?php while ($row = mysqli_fetch_array($result)) : ?>
        <div class="shadow-sm hover:shadow-xl transition duration-500 px-8 py-4 rounded-xl">
          <div class="flex justify-center"><img src="../../../public/icons/image-gallery.png" alt="" class="w-20 my-16 lg:my-10 lg:w-36"></div>
          <div>
            <p class="text-2xl lg:text-3xl my-4"><?= $row['nama_event'] ?></p>
            <p class="text-sm lg:text-base"><?= $row['deskripsi_event'] ?></p>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </section>
</body>

</html>