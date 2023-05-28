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
  <nav class="flex flex-col lg:flex-row justify-between px-8  lg:px-32 py-5 items-center sticky top-0 bg-white backdrop-filter backdrop-blur-lg bg-opacity-70 z-50 gap-y-8">
    <div class="items-center text-xl hidden md:flex">
      <img src="../../public/icons/logo.png" alt="" width="46px">
      <p class="ml-4 text-xl">Animers Majalengka</p>
    </div>
    <div class="flex gap-8 lg:gap-x-20 items-center overflow-x-visible text-sm lg:text-base flex-wrap md:flex-nowrap gap-y-10 justify-center lg:justify-normal">
      <p class="hover:text-indigo-500 transition hover:scale-[1.05] text-indigo-500"><a href="">Home</a> </p>
      <p class="hover:text-emerald-500 transition  hover:scale-[1.05] "><a href="activity/">Comunity Activity</a></p>
      <p class="hover:text-violet-500 transition hover:scale-[1.05] group "><a href="event/">Event <span class="absolute opacity-100 lg:opacity-0 group-hover:opacity-100 transition ">🎉</span></a></p>
      <p class="hover:text-cyan-500 transition  hover:scale-[1.05] <?= $afterLogin ?>"><a href="profile/">Profile</a></p>
      <a href="auth/sign-in.php" class="<?= $beforeLogin ?>">
        <button class="bg-indigo-500 text-white px-8 py-3 rounded-full hover:bg-white hover:text-indigo-500 hover:border-2 hover:border-indigo-500 transition border-2 border-indigo-500 hidden md:block scale-[0.85] lg:scale-100">Join Us</button></a>
      <a href="api/sign-out.php" class="<?= $afterLogin ?> hover:text-red-500 transition duration-300 ">
        <button onclick="return confirm('Kamu yakin ingin Sign-Out?')">Sign Out</button>
      </a>
    </div>
  </nav>
  <section class="mx-10 md:mx-28 xl:mx-52 my-10 lg:my-20">
    <div class="flex flex-col lg:flex-row lg:items-center lg:my-40 justify-between ">
      <div class="font-extralight text-6xl lg:text-8xl mb-14 lg:mb-0">
        <p>Welcome
          <br>to
        </p>
        <p>Animers <br> Majalengka</p>

      </div>
      <div class="<?= $beforeLogin ?>">
        <img src="../../public/images/wibu.png" alt="" class="rounded-xl hover:scale-[1.05] lg:w-[650px] transition duration-[500ms] shadow-2xl shadow-stone-300">
      </div>
      <div class="<?= $afterLogin ?>">
        <img src="../../public/images/wibu-2.png" alt="" class="rounded-xl hover:scale-[1.05] lg:w-[650px] transition duration-[500ms] shadow-2xl shadow-stone-300">
      </div>
    </div>
    <section class="mt-52 lg:my-80">
      <div class="font-light my-32 lg:w-[750px] group">
        <p class="text-4xl lg:text-6xl ">Forum Apakah Ini<span class=" absolute lg:group-hover:rotate-12 transition duration-[400ms] lg:group-hover:scale-[1.5] lg:group-hover:-translate-y-2 lg:group-hover:translate-x-3">?</span></p>
        <p class="text-lg lg:text-xl mt-6  ">
          Animers Majalengka merupakan sebuah web forum diskusi yang khusus membahas tentang kegiatan cosplayer di wilayah Majalengka. Forum ini menjadi tempat para cosplayer berkumpul untuk berbagi pengalaman, berdiskusi, serta saling berinteraksi dalam mengembangkan hobi mereka.</p>
      </div>

      <div class="font-light lg:w-[680px] text-right ml-auto">
        <p class="text-4xl lg:text-6xl ">Lalu Apa <br> <span class="bg-indigo-500 transition text-white duration-300">Keuntungannya</span>?</p>
        <p class="text-lg lg:text-xl mt-6 transition duration-200">
          Melalui forum ini, cosplayer dapat saling berbagi pengalaman dan pengetahuan tentang cosplay, sehingga dapat meningkatkan kualitas cosplay mereka. Dengan bergabung di Animers Majalengka, cosplayer dapat lebih mudah mengikuti event dan kompetisi cosplay di wilayah Majalengka dan sekitarnya.</p>
      </div>
    </section>

    <div class="my-52 lg:mt-80">
      <div class="<?= $beforeLogin ?>">
        <div class="text-center lg:w-[800px] mx-auto">
          <p class="text-3xl lg:text-4xl  font-light mb-2">Ayo Bergabung dengan Kami!</p>
          <p class="text-base lg:text-lg text-gray-600 ">
            Mari bergabung dengan komunitas cosplayer di Animers Majalengka! Bergabunglah sekarang untuk memperluas jaringan dan pengalaman cosplay Kamu!</p>
        </div>

        <div class="flex justify-center mt-10 ">
          <a href="auth/sign-in.php">
            <button class="bg-indigo-500 text-white px-14 py-3 rounded-full hover:bg-white hover:text-indigo-500 hover:border-2 hover:border-indigo-500 transition border-2 border-indigo-500 scale-[0.85] lg:scale-100 ">Join Us</button></a>
        </div>
      </div>

      <div class="<?= $afterLogin ?> h-[40vh] lg:h-[60vh]">
        <div class="text-center lg:w-[850px] mx-auto group">
          <div class="text-4xl lg:text-5xl mb-4 ">🏹</div>
          <p class="text-2xl lg:text-7xl font-light mb-2">
            Community Activity</p>
          <p class="text-base lg:text-lg text-emerald-500">
            Kamu bisa melihat apa saja yang orang lain sudah lakukan dalam beberapa hari kemarin loh!</p>
        </div>

        <div class="flex justify-center mt-10">
          <a href="event/">
            <button class="hover:bg-emerald-500 hover:text-white px-14 py-3 rounded-full bg-white text-emerald-500 hover:border-2 hover:border-emerald-500 transition border-2 border-emerald-500 scale-[0.85] lg:scale-100 ">Pergi ke Community Activity</button></a>
        </div>
      </div>
      <div class="<?= $afterLogin ?> h-[40vh] lg:h-[60vh] ">
        <div class="text-center lg:w-[850px] mx-auto">
          <div class="text-4xl lg:text-5xl mb-4">🎉</div>
          <p class="text-2xl lg:text-7xl font-light mb-2">
            Events!</p>
          <p class="text-base lg:text-lg text-violet-500 ">
            Sepertinya kamu harus melihat beberapa Event yang kami selenggarakan beberapa hari ke depan. Kamu bisa mengikutinya dan bergabung dengan orang lain.</p>
        </div>

        <div class="flex justify-center mt-10">
          <a href="event/">
            <button class="hover:bg-violet-500 hover:text-white px-14 py-3 rounded-full bg-white text-violet-500 hover:border-2 hover:border-violet-500 transition border-2 border-violet-500 scale-[0.85] lg:scale-100 ">Pergi ke Event</button></a>
        </div>
      </div>
    </div>
  </section>
  <footer class="mt-32">
    <div class="flex justify-center mb-20 gap-x-14 scale-[0.8]">
      <a href="https://github.com/zaamaulan/syanda-web">
        <img src="../../public/icons/github-48.svg" alt="">
      </a>
      <a href="https://www.instagram.com/sun.thpyfny/" target="_blank">
        <img src="../../public/icons/instagram-48.svg" alt="">
      </a>
    </div>
    <div class="bg-gradient-to-r from-indigo-500 via-emerald-500 to-violet-500 py-2.5"></div>
  </footer>
</body>

</html>