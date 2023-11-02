<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location: /index.php");
}

$usuario = $_SESSION["user"];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/src/output.css" rel="stylesheet">
    <title>Alumno</title>
</head>

<body class="bg bg-gray-100">
    <div>
        <header class="bg-white text-gray-500 py-2 px-4 flex items-center ml-64 ">
            <div class="flex items-center space-x-1">
                <!-- Menú del lado izquierdo -->
                <ul class="flex space-x-4">
                    <li><a src="/logout">=</a></li>

                </ul>

                <span>Home</span>
            </div>
            <div class=" flex relative m-auto group mr-20  ">

                <span class="justify-end mr-2"><?= $usuario["correo"] ?></span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-gray-400 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
                <!-- Menú desplegable -->
                <ul id="menu" class="absolute hidden mt-2 space-y-2 bg-gray-800 text-white text-sm p-2 rounded-lg ">
                    <li><a href="#">Configuración</a></li>
                    <li><a href="/logout">Cerrar sesion</a></li>
                </ul>
            </div>
        </header>





        <aside id="default-sidebar" class="  fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto dark:bg-gray-50 bg-gray-800">
                <ul class="space-y-2 font-medium">
                    <li class=" border-b border-white">
                        <a href="#" class="flex items-center p-2 dark:text-gray-900 rounded-lg text-white dark:hover:bg-gray-100 hover:bg-gray-700 group">
                            <img src="/PFN3-master/assets/logo md.png" class=" border rounded-full w-11 h-11 dark:text-gray-500 transition duration-75 text-gray-400 dark:group-hover:text-gray-900 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </img>
                            <span class="ml-3">Universidad</span>
                        </a>
                    </li>
                    <li>
                        <p href="#" class="flex items-center p-2 dark:text-gray-900 rounded-lg text-white dark:hover:bg-gray-100 hover:bg-gray-700 group">

                            <span class="flex-1 ml-3 whitespace-nowrap"><?= $usuario["correo"] ?></span>
                        </p>

                    </li>
                    <li class=" border-b border-white flex items-center p-2 dark:text-gray-900  text-white">

                        <span class="flex-1 ml-3 whitespace-nowrap">Administrador</span>


                    </li>
                    <li class=" flex items-center p-2 dark:text-gray-900 rounded-lg text-white">

                        <h3 class="flex-1 ml-3 whitespace-nowrap">Menu Admininistracion</h3>

                    </li>
                    <li>
                        <a href="/permisos" class="flex items-center p-2 dark:text-gray-900 rounded-lg text-white dark:hover:bg-gray-100 hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Permisos</span>
                        </a>
                    </li>
                    <li>
                        <a href="/maestro" class="flex items-center p-2 dark:text-gray-900 rounded-lg text-white dark:hover:bg-gray-100 hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Maestros</span>
                        </a>
                    </li>
                    <li>
                        <a href="/estudiante" class="flex items-center p-2 dark:text-gray-900 rounded-lg text-white dark:hover:bg-gray-100 hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Alumnos</span>
                        </a>
                    </li>
                    <li>
                        <a href="/clases" class="flex items-center p-2 dark:text-gray-900 rounded-lg text-white dark:hover:bg-gray-100 hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                                <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                                <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Clases</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class=" p-4 sm:ml-64">
            <div class="flex items-center gap-60 h-10 border-dotted border-red-800 ">
                <h1 class="text-2xl text-gray-400 dark:text-gray-500 justify-start">
                    lista de maestros
                </h1>
                <p class="w-max ml-auto border-white rounded-md justify-end">home / Maestros </p>
            </div>
            <div class=" bg bg-white p-4 border-2 border-gray-200  rounded-lg dark:border-gray-700">

                <div class="">

                    <div class="flex items-center  h-10 rounded bg-wite  dark:bg-gray-800 mb-1">
                        <span class="text-gray-400 dark:text-gray-500 justify-start">Informacion de maestros</span>
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="ml-auto justify-end block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                            Agregar Maestro
                        </button>
                        <!--  modal para agregar -->
                        <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="fixed inset-0 flex items-start justify-start z-50">
                                    <div class=" relative bg-white rounded-lg shadow dark:bg-gray-700 m-auto">
                                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="px-6 py-6 lg:px-4  ">
                                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Agregar Maestro</h3>
                                            <form class="space-y-6" action="/addMaestro" method="post">
                                                <div>
                                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo Electronico</label>
                                                    <input type="text" name="correo" id="" placeholder="Ingrese email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre(S)</label>
                                                    <input type="text" name="nombre" id="" placeholder="Ingrese nombre(s)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido(s)</label>
                                                    <input type="text" name="apellido" id="" placeholder="Ingresa los apellidos " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion</label>
                                                    <input type="text" name="direccion" id="" placeholder="Ingresa la direccion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de Nacimiento</label>
                                                    <input type="text" name="fecha_nacimiento" id="" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clase asignada</label>
                                                    <select  name="nombre" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                                                    <?php foreach ($listaClases as $clase) { ?>
                                                            <option value="<?=$clase['id']?>"><?=$clase['clase_nombre']?></option>
                                                        <?php } ?>


                                                    </select>

                                                    <!--  <input type="text" name="rol_id" value="3" class="hidden">
                                                    <input type="text" name="contrasena" value="alumno" class="hidden"> -->

                                            </form>
                                            <div class="flex mt-5 ml-96 gap-1 justify-end">
                                                <a href="/maestro" class="w-auto mt-1 text-white bg-gray-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">close</a>
                                                <button type="submit" class="w-auto mt-1 text-white bg-blue-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div class="flex items-center gap-60 h-10 rounded bg-wite dark:bg-gray-800 mb-1 ">

                <div class="flex rounded-md shadow-sm">
                    <a href="#" aria-current="page" class="px-4 py-2 text-sm font-medium text-white bg-gray-500 border border-gray-200 rounded-l-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Copy
                    </a>
                    <a href="#" class="px-4 py-2 text-sm font-medium text-white bg-gray-500 border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Excel
                    </a>
                    <a href="#" class="px-4 py-2 text-sm font-medium text-white bg-gray-500  border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Pdf
                    </a>
                    <a href="#" class="px-4 py-2 text-sm font-medium text-white bg-gray-500  border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Colum visibility
                    </a>
                    <label class="w-max ml-auto border-white rounded-md justify-end" for="">search</label><input class="border" type="text">

                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Direccion
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Fecha Nacimiento
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Clase Asignada
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($maestros as $maestro) { ?>
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $maestro["id"] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $maestro["nombre"] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $maestro["correo"] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $maestro["direccion"] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $maestro["fecha_nacimiento"] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                     <?= $maestro["clase_nombre"] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="/editaMaestro?id=<?= $maestro["id"] ?>" class="text-blue-500 hover:underline">Editar</a>
                                        <a href="/eliminaMaestro?id=<?= $maestro["id"] ?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">borrar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            <!-- Modal de edición -->
                            <div id="editModal" class="hidden fixed top-0 left-0 right-0 bottom-0 bg-black bg-opacity-50  items-center justify-center">
                                <div class="fixed inset-0 flex items-start justify-start z-50">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 m-auto">
                                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editModal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="px-6 py-6 lg:px-4">
                                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Editar Maestro</h3>
                                            <form class="space-y-6" action="/updateMaestro" method="post">
                                                <div>
                                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo Electronico</label>
                                                    <input type="text" name="correo" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre(S)</label>
                                                    <input type="text" name="nombre" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido(s)</label>
                                                    <input type="text" name="apellido" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion</label>
                                                    <input type="text" name="direccion" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de Nacimiento</label>
                                                    <input type="date" name="fecha_nacimiento" id="" Class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de Nacimiento</label>
                                                    <select type="date" name="fecha_nacimiento" id="" Class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                        <option value="1">Matematicas</option>
                                                        <option value="2">Castellano</option>
                                                        <option value="3">ingles</option>
                                                    </select>
                                                </div>
                                                <div class="flex mt-5 ml-96 gap-1 justify-end">
                                                    <a href="/maestro" type="reset" class="w-full text-white bg-gray-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Close</a>
                                                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                        </tbody>
                    </table>
                </div>
            </div>


        </div>




    </div>
    </div>
    </div>
    </div>

</body>

<script>
    // JavaScript para controlar la apertura y cierre del menú desplegable
    const menuButton = document.querySelector('.group');
    const menu = document.getElementById('menu');

    menuButton.addEventListener('click', function() {
        menu.classList.toggle('hidden');
    });

    document.addEventListener('click', function(event) {
        if (!menuButton.contains(event.target) && !menu.contains(event.target)) {
            menu.classList.add('hidden');
        }
    });

    // control de modal para agregar
    const modalToggle = document.querySelector('[data-modal-toggle="authentication-modal"]');
    const modal = document.getElementById('authentication-modal');

    // Agregar un controlador de eventos al botón "Toggle modal" para mostrar el modal
    modalToggle.addEventListener('click', () => {
        modal.classList.remove('hidden');
        modal.setAttribute('aria-hidden', 'false');
    });

    // Agregar un controlador de eventos al botón "Close modal" dentro del modal para ocultar el modal
    const closeModalButton = modal.querySelector('[data-modal-hide="authentication-modal"]');
    closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
        modal.setAttribute('aria-hidden', 'true');
    });

    // Agregar un controlador de eventos para cerrar el modal cuando se presiona la tecla Escape
    window.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && modal.getAttribute('aria-hidden') === 'false') {
            modal.classList.add('hidden');
            modal.setAttribute('aria-hidden', 'true');
        }
    });



    // Función para mostrar el modal de edición

    const editModalLink = document.getElementById('editModalLink');
    const editModal = document.getElementById('editModal');

    // Función para mostrar el modal de edición
    function openEditModal() {
        editModal.classList.remove('hidden');
    }

    // Función para ocultar el modal de edición
    function closeEditModal() {
        editModal.classList.add('hidden');
    }

    editModalLink.addEventListener('click', (e) => {
        e.preventDefault();
        openEditModal();
    });

    // Agregar un controlador de eventos para cerrar el modal cuando se hace clic en el botón "Close"
    const closeEditModalButton = editModal.querySelector('[data-modal-hide="editModal"]');
    closeEditModalButton.addEventListener('click', () => {
        closeEditModal();
    });
</script>
</body>

</html>