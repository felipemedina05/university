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
    <title>Esquema clases</title>
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
                    <li><a href="/perfil?id=<?= $usuario["id"] ?>"><img src="/assets/perfil.svg"></img> Perfil</a></li>
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

                            <span class="flex-1 ml-3 whitespace-nowrap">Alumno</span>
                        </p>

                    </li>
                    <li class=" border-b border-white flex items-center p-2 dark:text-gray-900  text-white">

                        <span class="flex-1 ml-3 whitespace-nowrap"><?= $usuario["nombre"] ?> <?= $usuario["apellido"] ?></span>


                    </li>
                    <li class=" flex items-center p-2 dark:text-gray-900 rounded-lg text-white">

                        <h3 class="flex-1 ml-3 whitespace-nowrap">Menu Alumnos</h3>


                    <li>
                        <a href="/calificaciones?id=<?= $usuario["id"] ?>" class="flex items-center p-2 dark:text-gray-900 rounded-lg text-white dark:hover:bg-gray-100 hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Ver calificaciones </span>
                        </a>
                    </li>

                    <li>
                        <a href="/administrarClases?id=<?= $usuario["id"] ?>" class="flex items-center p-2 dark:text-gray-900 rounded-lg text-white dark:hover:bg-gray-100 hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Administrar tus clases </span>
                        </a>
                    </li>


                </ul>
            </div>
        </aside>

        <div class=" p-4 sm:ml-64">
            <div class="flex items-center gap-60 h-10 border-dotted border-red-800 ">
                <h1 class="text-2xl text-gray-400 dark:text-gray-500 justify-start">
                    Esquema de clases
                </h1>
                <p class="w-max ml-auto border-white rounded-md justify-end">home / Clases </p>
            </div>
            <div class=" bg bg-white p-4 border-2 border-gray-200  rounded-lg dark:border-gray-700">

                <div class="">

                    <div class="flex items-center  h-10 rounded bg-wite  dark:bg-gray-800 mb-1">
                        <span class="text-gray-400 dark:text-gray-500 justify-start">Tus Materias Inscritas</span>


                    </div>

                </div class="flex items-center gap-60 h-10 rounded bg-wite dark:bg-gray-800 mb-1 ">


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Materia
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    darse de baja
                                </th>



                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($calificaciones as $alumno) { ?>
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $alumno["id"] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $alumno["clase_nombre"] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="/debaja" method="post">
                                            <input type="text" name="id_sesion" value="<?= $usuario["id"] ?>" class="hidden"> </input>
                                            <button type="submit" name="ac_id" value="<?= $alumno["ac_id"] ?>">
                                                <img src="/assets/baja.svg"></img>

                                            </button>
                                        </form>
                                    </td>






                                </tr>
                            <?php } ?>


                        </tbody>




                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    <form class="space-y-6" action="/inscribir" method="post">
        <input class="hidden" name="id_usuario" value="<?= $usuario["id"] ?>"></input>
        <select multiple name="clases[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[600px] p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <?php foreach ($inscibirlas as $inscribir) { ?>
                <option value="<?= $inscribir["id"] ?>"><?= $inscribir["clase_nombre"] ?></option>
            <?php } ?>
        </select>

        <button class="w-auto mt-1 text-white bg-blue-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-6 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">Inscribir</button>
    </form>
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