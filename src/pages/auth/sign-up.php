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
    <form action="../api/sign-up.php" method="post" class="flex flex-col bg-white px-24 py-14 rounded-md">
      <h1 class="text-4xl text-center mb-10 font-semibold">Sign Up</h1>
      <div class="mb-6 text-md w-full mx-auto">
        <label for="username">Username</label>
        <input type="text" name="username" id="" class="border-2 border-gray-200 focus:outline-2 focus:outline-indigo-500 px-3 py-1.5 rounded-lg w-full" require>
      </div>
      <div class="mb-6 text-md w-full mx-auto">
        <label for="email">Email</label>
        <input type="email" name="email" id="" class="border-2 border-gray-200 focus:outline-2 focus:outline-indigo-500 px-3 py-1.5 rounded-lg w-full" require>
      </div>
      <div class="mb-3 text-md w-full mx-auto">
        <label for="password">Password</label>
        <input type="password" name="password" id="" class="border-2 border-gray-200 focus:outline-2 focus:outline-indigo-500 px-3 py-1.5 rounded-lg w-full" require>
      </div>
      <h1 class="text-sm text-right mb-10">Sudah Punya Akun? <a href="sign-in.php" class="text-indigo-600 ">Sign In</a></h1>
      <input type="submit" value="Sign Up" class="px-6 py-2.5 bg-indigo-500 text-white font-semibold hover:bg-indigo-600 transition rounded-lg w-full mx-auto">
    </form>
  </div>
</body>

</html>