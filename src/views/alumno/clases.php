<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location: /index.php");
}

$usuario= $_SESSION["user"];

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
                <ul id="menu" class="absolute hidden mt-7 space-y-2 bg-white text-gray-800 text-sm p-2 rounded-lg ">
                    <li><a href="/perfil?id=<?=$usuario["id"]?>"><img src="/assets/perfil.svg"></img> Perfil</a></li>
                    <li><a href="/logout"><img src="/assets/logout.svg"></img> Cerrar sesion</a></li>
                </ul>
            </div>
        </header>
        


       

        <aside id="default-sidebar" class=" fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
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

                            <span class="flex-1 ml-3 whitespace-nowrap"><?= $usuario ["correo"]?></span>
                        </p>

                    </li>
                    <li class=" border-b border-white flex items-center p-2 dark:text-gray-900  text-white">

                        <span class="flex-1 ml-3 whitespace-nowrap">Maestro</span>


                    </li>
                    <li class=" flex items-center p-2 dark:text-gray-900 rounded-lg text-white">

                        <h3 class="flex-1 ml-3 whitespace-nowrap">Menu Maestros</h3>

                    </li>
                    <li>
                        <a href="/alumnos?id=<?=$usuario["id"]?>  " class="flex items-center p-2 dark:text-gray-900 rounded-lg text-white dark:hover:bg-gray-100 hover:bg-gray-700 group">
                        <img src="/assets/alumno.svg" ></img> 
                            <span class="flex-1 ml-3 whitespace-nowrap">Alumnos</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside> 
 
        <div class=" p-4 sm:ml-64">
        <div class="flex items-center gap-60 h-10 border-dotted border-red-800 ">
                    <h1 class="text-2xl text-gray-400 dark:text-gray-500 justify-start">
                    Alumnos de la Clase de <?= $infMaestros[0]["clase_nombre"] ?>
                    </h1>
                    <p class="w-max ml-auto border-white rounded-md justify-end">home / Alumnos </p>
                </div>
            <div class=" bg bg-white p-4 border-2 border-gray-200  rounded-lg dark:border-gray-700">
                
                <div class="">

                    <div class="flex items-center  h-10 rounded bg-wite  dark:bg-gray-800 mb-1">
                        <span class="text-gray-400 dark:text-gray-500 justify-start">Alumnos de la Clase  <?= $infMaestros[0]["clase_nombre"] ?></span>

                        
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
                                    NOMBRE DEL ALUMNO
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    CALIFICACION
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    MENSAJE
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ACCIONES
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listaAlumnos as $alumno)  { ?>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?=$alumno["alumno_id"] ?>
                                </td>
                                <td class="px-6 py-4">
                                <?=$alumno["nombre"] ?>
                                </td>
                                <td class="px-6 py-4">
                                <?=$alumno["calificacion"] ?>
                                </td>
                                <td class="px-6 py-4">
                                <?=$alumno["mensaje"] ?>
                                </td>

                                <td class="px-6 py-4">
                                    <a href="#"  class="text-blue-500 hover:underline">calificacion</a>
                                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">mensaje</a>
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
                                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Editar Alumno</h3>
                                            <form class="space-y-6" action="/up" method="post">
                                                <div>
                                                    <label for="DNI" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DNI</label>
                                                    <input type="text" name="dni"  id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
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
                                                </div>
                                                <div class="flex mt-5 ml-96 gap-1 justify-end">
                                                    <a href="/estudiante" type="reset" class="w-full text-white bg-gray-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Close</a>
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