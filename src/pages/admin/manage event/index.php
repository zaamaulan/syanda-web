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
  <nav class="flex justify-between px-32 py-5 items-center sticky top-0 bg-white backdrop-filter backdrop-blur-lg bg-opacity-70 z-50">
    <div class="flex items-center text-xl"><img src="../../../../public/icons/logo.png" alt="" width="46px">
      <h1 class="ml-4 text-xl">Animers Majalengka</h1>
    </div>
    <div class="flex gap-x-20 items-center">
      <h1 class="hover:text-indigo-500 transition  hover:scale-[1.05]"><a href="../">Dashboard</a></h1>
      <h1 class="hover:text-emerald-500 transition hover:scale-[1.05]"><a href="../community/">Control Community</a></h1>
      <h1 class="hover:text-orange-500 transition  hover:scale-[1.05]"><a href="../data/">Info Data</a></h1>
      <h1 class="hover:text-violet-500 transition hover:scale-[1.05] group text-violet-500"><a href="">Manage Event</a></h1>
      <a href="../../api/sign-out.php" class="<?= $afterLogin ?> hover:text-red-500 transition duration-300 ">
        <button>Sign Out</button>
      </a>
    </div>
  </nav>
  <section class="flex justify-center items-center h-[80vh]">
    <h1 class="text-7xl font-extralight">Manage Event</h1>
  </section>
</body>

</html>