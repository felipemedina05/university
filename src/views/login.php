<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/src/output.css" rel="stylesheet">

  <title>Document</title>
</head>

<body class="bg bg-orange-100">
  <div class=" mx-auto w-max">
    <div class="w-max h-max bg bg-white text-gray-600">
      <img src="/assets/logo.jpg" alt="logo" class="w-80 h-80 ">
      <form  class="bg bg-white  text-slate-400" action="/login" method="post">
        <div class="mb-2">
        <span >Bienvenido ingresa con tu cuenta </span>
          <input type="email" placeholder="Email" id="email-address-icon" name="correo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  placeholder=" name@flowbite.com" required>
        </div>
        <div class="mb-6">

          <input type="password" placeholder="Password" id="password" name="contrasena" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="flex items-start mb-2">
          <button type="submit" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ingresar</button>

          <div class="flex items-center h-5">

      </form>
    </div>
  </div>
</body>

</html>