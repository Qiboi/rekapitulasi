<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="apple-touch-icon" sizes="76x76" href="../img/pertaminalogo.png">
    <link rel="icon" type="image/png" href="../img/pertaminalogo.png">
    <title>Pertamina ATP</title>
</head>
<body style="background-image: url('/img/pertamina.jpg'); background-size: cover; background-position: center;">
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-50 w-auto" src="img/pertaminalogo2.png" alt="pertamina logo" >
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white"></h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="#" method="POST">
        <div>
          <label for="email" class="block text-sm font-semibold leading-6 text-white">Email</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-semibold leading-6 text-white">Kata Sandi</label>
            <div class="text-sm">
              <a href="#" class="font-bold text-white hover:text-green-300">Lupa Kata Sandi?</a>
            </div>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-blue-900 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Masuk</button>
        </div>
      </form>
      <p class="mt-10 text-center text-sm text-white">
        Belum punya akun?
        <a href="#" class="font-semibold leading-6 text-white hover:text-green-300">Daftar disini!</a>
      </p>
    </div>
  </div>
</body>
</html>
