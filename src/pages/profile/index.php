<?php
session_start();
if (!isset($_SESSION['login'])) {
  $afterLogin = 'hidden';
} else {
  $beforeLogin = 'hidden';
}

include '../api/connection.php';

$id = $_SESSION['id'];
$query = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

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
      <p class="hover:text-violet-500 transition hover:scale-[1.05] group "><a href="../event/">Event <span class="absolute opacity-100 lg:opacity-0 group-hover:opacity-100 transition">🎉</span></a></p>
      <p class="hover:text-cyan-500 transition  hover:scale-[1.05] text-cyan-500 <?= $afterLogin ?>"><a href="">Profile</a></p>
      <a href="../auth/sign-in.php" class="<?= $beforeLogin ?>">
        <button class="bg-indigo-500 text-white px-8 py-3 rounded-full hover:bg-white hover:text-indigo-500 hover:border-2 hover:border-indigo-500 transition border-2 border-indigo-500 scale-[0.85] lg:scale-100">Join Us</button></a>
      <a href="../api/sign-out.php" class="<?= $afterLogin ?> hover:text-red-500 transition duration-300 ">
        <button>Sign Out</button>
      </a>
    </div>
  </nav>
  <section class="flex justify-center items-center h-[80vh] ">
    <div class="flex flex-col p-20 items-center rounded-lg text-xl">
      <p class="font-light text-3xl lg:text-4xl">Profile</p>
      <form action="../api/edit.php?id=<?= $_SESSION['id'] ?>" method="post" id="profile">
        <div class="flex flex-col my-6">
          <label for="username" class="pl-3 text-sm lg:text-lg">Username</label>
          <input type="text" name="username" value="<?= $row['username'] ?>" id="" class="focus:outline-2 focus:outline-indigo-500 px-3 py-1.5 rounded-lg w-full text-sm lg:text-lg">
        </div>
        <div class="flex flex-col my-6">
          <label for="email" class="pl-3 text-sm lg:text-lg">Email</label>
          <input type="text" name="email" value="<?= $row['email'] ?>" id="" class="focus:outline-2 focus:outline-indigo-500 px-3 py-1.5 rounded-lg w-full text-sm lg:text-lg">
        </div>
        <input type="submit" id="update" style="display: none;" class="px-6 py-2.5 bg-indigo-500 text-white font-semibold hover:bg-indigo-600 transition rounded-lg w-full mx-auto">
      </form>
    </div>
  </section>
  <script>
    const form = document.getElementById('profile');
    const saveButton = document.getElementById('update');

    // Simpan nilai awal form
    const initialValue = {
      username: form.username.value,
      email: form.email.value,
    };

    // Tampilkan tombol "Simpan" jika terdapat perubahan pada form
    form.addEventListener('input', () => {
      if (form.username.value !== initialValue.username ||
        form.email.value !== initialValue.email) {
        update.style.display = 'block';
      } else {
        update.style.display = 'none';
      }
    });
  </script>
</body>

</html>