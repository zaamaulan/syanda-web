<?php
include '../../api/connection.php';

session_start();

$query = "SELECT * FROM users WHERE role = 'user'";
$result = mysqli_query($conn, $query);

$counter = 1;

// Jika query berhasil dan ada data
if ($result && mysqli_num_rows($result) > 0):

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
  <nav class="flex justify-between px-32 py-5 items-center sticky top-0 bg-white backdrop-filter backdrop-blur-lg bg-opacity-70 z-50">
    <div class="flex items-center text-xl"><img src="../../../../public/icons/logo.png" alt="" width="46px">
      <h1 class="ml-4 text-xl">Animers Majalengka</h1>
    </div>
    <div class="flex gap-x-20 items-center">
      <h1 class="hover:text-indigo-500 transition  hover:scale-[1.05]"><a href="../">Dashboard</a></h1>
      <h1 class="hover:text-emerald-500 transition hover:scale-[1.05]"><a href="../community/">Control Community</a></h1>
      <h1 class="hover:text-orange-500 transition  hover:scale-[1.05] text-orange-500"><a href="">Info Data</a></h1>
      <h1 class="hover:text-violet-500 transition hover:scale-[1.05] group"><a href="../manage event/">Manage Event</a></h1>
      <a href="../../api/sign-out.php" class="<?= $afterLogin ?> hover:text-red-500 transition duration-300 ">
        <button>Sign Out</button>
      </a>
    </div>
  </nav>
  <section class="h-[90vh] bg-stone-50 px-28 pt-10">
    <div class="mb-10">
      <h1 class="text-3xl">Data Akun User</h1>
      <h1 class="text-xl">Kamu Sign In Sebagai <?php echo $_SESSION['username'] ?></h1>
    </div>
    <table class="bg-white w-full">
      <thead class="">
        <td class=" border-stone-200 p-2 border py-4 pl-7">Id</td>
        <td class=" border-stone-200 p-2 border px-8 pl-7">Username</td>
        <td class=" border-stone-200 p-2 border px-8 pl-7">Email</td>
        <td class=" border-stone-200 p-2 border px-8 pr-32 pl-7">Role</td>
        <td class=" border-stone-200 p-2 border px-8 pr-32 pl-7">Action</td>
      </thead>
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tbody>
          <td class="text-lg font-light py-4 px-6 border border-stone-200 p-2"><?= $counter++;?></td>
          <td class="text-lg font-light pr-32 border border-stone-200 p-2 px-8"><?= $row['username'] ?></td>
          <td class="text-lg font-light pr-32 border border-stone-200 p-2 px-8"><?= $row['email'] ?></td>
          <td class="text-lg font-light border border-stone-200 p-2 px-8"><?= $row['role'] ?></td>
          <td class="text-sm font-base text-red-500 border border-stone-200 p-2 px-8"><a href="../../api/delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"><button>Delete</button></a></td>
        </tbody>
        
      <?php endwhile; ?>
    </table>
  </section>
</body>

<?php endif; ?>

</html>