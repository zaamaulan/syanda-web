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
  <link rel="stylesheet" href="styles/style.css">
</head>

<body class="font-inter ease-in-out">
  <nav class="flex justify-between px-32 py-5 items-center sticky top-0 bg-white backdrop-filter backdrop-blur-lg bg-opacity-70 z-50">
    <div class="flex items-center text-xl"><img src="../../public/icons/logo.png" alt="" width="46px">
      <h1 class="ml-4 text-xl">Animers Majalengka</h1>
    </div>
    <div class="flex gap-x-20 items-center">
      <h1 class="hover:text-indigo-500 transition text-indigo-500 hover:scale-[1.10]">Home</h1>
      <h1 class="hover:text-indigo-500 transition  hover:scale-[1.10]"><a href="#">Comunity Activity</a></h1>
      <h1 class="hover:text-indigo-500 transition hover:scale-[1.10]"><a href="event/">Event</a></h1>
      <a href="auth/sign-in.php" class="<?= $beforeLogin ?>">
        <button class="bg-indigo-500 text-white px-8 py-3 rounded-full hover:bg-white hover:text-indigo-500 hover:border-2 hover:border-indigo-500 transition border-2 border-indigo-500">Join Us</button></a>
      <a href="api/sign-out.php" class="<?= $afterLogin ?> hover:text-red-500 transition duration-300 ">
        <button>Sign Out</button>
      </a>
    </div>
  </nav>
  <section class="mx-52">
    <div class="flex items-center my-40 justify-between">
      <div class="font-light text-8xl">
        <h1>Welcome
          <br>to
        </h1>
        <h1>Animers <br> Majalengka</h1>

      </div>
      <div class="<?= $beforeLogin ?>">
        <img src="../../public/images/wibu.png" alt="" class="rounded-3xl hover:scale-[1.05] w-[650px] transition duration-[500ms] shadow-2xl shadow-stone-300">
      </div>
      <div class="<?= $afterLogin ?>">
        <img src="../../public/images/wibu-2.png" alt="" class="rounded-3xl hover:scale-[1.05] w-[650px] transition duration-[500ms] shadow-2xl shadow-stone-300">
      </div>
    </div>
    <section class="my-80">
      <div class="font-light my-32 w-[750px] group">
        <!-- <div class="px-52 py-12 bg-indigo-500 absolute -z-50 -translate-y-9"></div> -->

        <h1 class="text-6xl ">Forum Apakah Ini<span class=" absolute group-hover:rotate-12 transition duration-[400ms] group-hover:scale-[1.5] group-hover:-translate-y-2 group-hover:translate-x-3">?</span></h1>
        <h1 class="text-xl mt-6  ">
          Animers Majalengka merupakan sebuah web forum diskusi yang khusus membahas tentang kegiatan cosplayer di wilayah Majalengka. Forum ini menjadi tempat para cosplayer berkumpul untuk berbagi pengalaman, berdiskusi, serta saling berinteraksi dalam mengembangkan hobi mereka.</h1>
      </div>

      <div class="font-light my-32 w-[680px] group text-right ml-auto duration-[1s]">
        <!-- <div class="px-52 py-12 bg-indigo-500 absolute -z-50 -translate-y-9"></div> -->
        <h1 class="text-6xl ">Lalu Apa <br> <span class="group-hover:bg-indigo-500 pl-10 group-hover:text-white transition text-white duration-300">Keuntungannya</span> <span class=" absolute group-hover:rotate-0 transition duration-[400ms] scale-[1] -translate-y-[3.7rem] group-hover:translate-y-0 ">?</span></h1>
        <h1 class="text-xl mt-6  -translate-y-14 group-hover:translate-y-0 transition duration-200">
          Melalui forum ini, cosplayer dapat saling berbagi pengalaman dan pengetahuan tentang cosplay, sehingga dapat meningkatkan kualitas cosplay mereka. Dengan bergabung di Animers Majalengka, cosplayer dapat lebih mudah mengikuti event dan kompetisi cosplay di wilayah Majalengka dan sekitarnya.</h1>
      </div>
    </section>

    <div class="mt-80  ">
      <div class="text-center w-[800px] mx-auto <?= $beforeLogin ?>">
        <h1 class="text-4xl  font-light mb-2">Ayo Bergabung dengan Kami!</h1>
        <h1 class="text-lg text-gray-600 ">
          Mari bergabung dengan komunitas cosplayer di Animers Majalengka! Bergabunglah sekarang untuk memperluas jaringan dan pengalaman cosplay Kamu!</h1>
      </div>

      <div class="flex justify-center mt-10  <?= $beforeLogin ?>">
        <a href="auth/sign-in.php">
          <button class="bg-indigo-500 text-white px-14 py-3 rounded-full hover:bg-white hover:text-indigo-500 hover:border-2 hover:border-indigo-500 transition border-2 border-indigo-500 ">Join Us</button></a>
      </div>

      <div class="text-center w-[850px] mx-auto  <?= $afterLogin ?> ">
        <div class="text-5xl mb-4">🎉</div>
        <h1 class="text-7xl font-light mb-2">
          Events!</h1>
        <h1 class="text-lg text-violet-500 ">
          Sepertinya kamu harus melhat beberapa Event yang kami selenggarakan beberapa hari ke depan.</h1>
      </div>

      <div class="flex justify-center mt-10  <?= $afterLogin ?>">
        <a href="event/">
          <button class="hover:bg-violet-500 hover:text-white px-14 py-3 rounded-full bg-white text-violet-500 hover:border-2 hover:border-violet-500 transition border-2 border-violet-500 ">Pergi ke Event</button></a>
      </div>
    </div>
  </section>
  <footer class="mt-64">
    <div class="flex justify-center mb-20 gap-x-14 scale-[0.8]">
      <a href="https://github.com">
        <img src="../../public/icons/github-48.svg" alt="">
      </a>
      <a href="https://tiktok.com">
        <img src="../../public/icons/tiktok-48.svg" alt="">
      </a>
      <a href="https://instagram.com">
        <img src="../../public/icons/instagram-48.svg" alt="">
      </a>
    </div>
    <div class="bg-indigo-500 py-2.5"></div>
  </footer>
  <script>

  </script>
</body>

</html>