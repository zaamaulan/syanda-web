<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="../styles/style.css">
  <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      /* display: none; <- Crashes Chrome on hover */
      -webkit-appearance: none;
      margin: 0;
      /* <-- Apparently some margin are still there even though it's hidden */
    }
  </style>
</head>

<body class="bg-stone-50 font-inter">
  <div class="flex justify-center items-center h-screen ">
    <form action="" method="post" class="flex flex-col bg-white px-20 py-12 rounded-md w-[24%]">
      <h1 class="text-4xl text-center mb-10 font-semibold">Sign In</h1>
      <div class="mb-6 text-md">
        <label for="username">Username</label>
        <input type="text" name="username" id="" class="border-2 border-gray-200 focus:outline-2 focus:outline-indigo-500 px-2 py-1 rounded-lg w-full" require>
      </div>
      <div class="mb-6 text-md">
        <label for="email">Email</label>
        <input type="email" name="email" id="" class="border-2 border-gray-200 focus:outline-2 focus:outline-indigo-500 px-2 py-1 rounded-lg w-full" require>
      </div>
      <div class="mb-6 text-md">
        <label for="password">Password</label>
        <input type="password" name="password" id="" class="border-2 border-gray-200 focus:outline-2 focus:outline-indigo-500 px-2 py-1 rounded-lg w-full" require>
      </div>
      <div class="mb-3 text-md">
        <label for="no_whatsapp">Password</label>
        <input type="password" name="password" id="" class="border-2 border-gray-200 focus:outline-2 focus:outline-indigo-500 px-2 py-1 rounded-lg w-full" require>
      </div>
      <h1 class="text-sm text-right mb-10">Belum Punya Akun? <a href="sign-up.php" class="text-indigo-600 ">Sign Up</a></h1>
      <input type="submit" value="Sign In" class="px-6 py-2.5 bg-indigo-500 text-white font-semibold hover:bg-indigo-600 transition rounded-lg">
    </form>
  </div>
</body>

</html>