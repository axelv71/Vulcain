<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_ENV['APP_NAME'] ?></title>
    <link rel="shortcut icon" href="./app/assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./app/assets/css/tailwind.css">

</head>

<body>
    <div id="loading-overlay" class="w-full h-full fixed block top-0 left-0 bg-white opacity-75 z-50 flex align-center" style="display: none;">
        <div class="opacity-100 w-min my-0 mx-auto flex align-center">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="spinner" class="w-36 opacity-100 text-red-600 animate-spin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z"></path>
            </svg>
        </div>
    </div>

    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">

        <?php require('./app/views/components/sidebar.php') ?>

        <div class="flex flex-col flex-1 w-full">
            <?php require('./app/views/components/topbar.php') ?>

            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">

                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        Create Project
                    </h2>


                    <!-- Cards -->
                    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                        <!-- Card -->

                        <button data-target="#add" class="modal-button flex flex-col items-center py-4 bg-white rounded-lg shadow-xs ">
                            <div class="rounded-full dark:text-orange-100">
                              <p style="font-size: 50px;">+</p>
                            </div>
                            <div>
                                <p class="text-lg font-medium text-gray-600 dark:text-gray-400">
                                    Add an existing project
                                </p>
                            </div>
                        </button>

                        <button data-target="#blank" class="modal-button flex flex-col items-center py-4 bg-white rounded-lg shadow-xs ">
                            <div class="rounded-full dark:text-orange-100">
                                <svg class="w-16 h-16" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="laravel" class="svg-inline--fa fa-laravel fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-6 400H54c-3.3 0-6-2.7-6-6V86c0-3.3 2.7-6 6-6h340c3.3 0 6 2.7 6 6v340c0 3.3-2.7 6-6 6z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-lg font-medium text-gray-600 dark:text-gray-400">
                                    Blank
                                </p>
                            </div>
                        </button>

                        <button data-target="#php" class="modal-button flex flex-col items-center py-4 bg-white rounded-lg shadow-xs ">
                            <div class="rounded-full dark:text-orange-100">
                                <svg class="w-24 h-16" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="laravel" class="svg-inline--fa fa-laravel fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M320 104.5c171.4 0 303.2 72.2 303.2 151.5S491.3 407.5 320 407.5c-171.4 0-303.2-72.2-303.2-151.5S148.7 104.5 320 104.5m0-16.8C143.3 87.7 0 163 0 256s143.3 168.3 320 168.3S640 349 640 256 496.7 87.7 320 87.7zM218.2 242.5c-7.9 40.5-35.8 36.3-70.1 36.3l13.7-70.6c38 0 63.8-4.1 56.4 34.3zM97.4 350.3h36.7l8.7-44.8c41.1 0 66.6 3 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7h-70.7L97.4 350.3zm185.7-213.6h36.5l-8.7 44.8c31.5 0 60.7-2.3 74.8 10.7 14.8 13.6 7.7 31-8.3 113.1h-37c15.4-79.4 18.3-86 12.7-92-5.4-5.8-17.7-4.6-47.4-4.6l-18.8 96.6h-36.5l32.7-168.6zM505 242.5c-8 41.1-36.7 36.3-70.1 36.3l13.7-70.6c38.2 0 63.8-4.1 56.4 34.3zM384.2 350.3H421l8.7-44.8c43.2 0 67.1 2.5 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7H417l-32.8 168.7z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-lg font-medium text-gray-600 dark:text-gray-400">
                                    PHP
                                </p>
                            </div>
                        </button>

                        <button data-target="#laravel" class="modal-button flex flex-col items-center py-4 bg-white rounded-lg shadow-xs ">
                            <div class="rounded-full dark:text-orange-100">
                                <svg class="w-16 h-16" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="laravel" class="svg-inline--fa fa-laravel fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-lg font-medium text-gray-600 dark:text-gray-400">
                                    Laravel
                                </p>
                            </div>
                        </button>

                        <?php for ($i = 0; $i < count($_ENV['RS_PROJECT']); $i++) { ?>
                            <button data-target="#custom-<?= $i ?>" class="modal-button flex flex-col items-center py-4 bg-white rounded-lg shadow-xs ">
                                <div class="rounded-full dark:text-orange-100">
                                    <svg class="w-16 h-16" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="laravel" class="svg-inline--fa fa-laravel fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-6 400H54c-3.3 0-6-2.7-6-6V86c0-3.3 2.7-6 6-6h340c3.3 0 6 2.7 6 6v340c0 3.3-2.7 6-6 6z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-lg font-medium text-gray-600 dark:text-gray-400">
                                        <?= $_ENV['RS_PROJECT'][$i][0] ?>
                                    </p>
                                </div>
                            </button>
                        <?php  }  ?>
                    </div>

                </div>
            </main>
        </div>
    </div>

    <!-- Modals -->

    <div id="add" class="modal hidden fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <form id="add-form" class="form inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <input type="hidden" name="type" value="add" />
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="flex items-center justify-center flex-col">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-24 w-24 rounded-full bg-red-100">
                            <img src="./app/assets/img/volcan.png" />
                        </div>
                        <h3 class="text-xl font-bold">Add an existing project</h3>
                    </div>
                    <p class="error text-red-500"></p>
                    <div class="mt-5">
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700">Name</label>
                            <input name="name" required class="w-full py-2 px-4 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" placeholder="Name of your project" type="text" />
                        </div>
                    </div>
                    <div class="mt-5">
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700">Folder name</label>
                            <input name="folder" required class="w-full py-2 px-4 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" placeholder="Name of your folder" type="text" />
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="submit" class="bg-gradient-to-r from-red-500 to-yellow-500 hover:from-red-600 hover:to-yellow-600 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Create
                    </button>
                    <button type="button" class="modal-quit mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div id="blank" class="modal hidden fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <form id="blank-form" class="form inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <input type="hidden" name="type" value="blank" />
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="flex items-center justify-center flex-col">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-24 w-24 rounded-full bg-red-100">
                            <img src="./app/assets/img/volcan.png" />
                        </div>
                        <h3 class="text-xl font-bold">Blank</h3>
                    </div>
                    <p class="error text-red-500"></p>
                    <div class="mt-5">
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700">Name</label>
                            <input name="name" required class="w-full py-2 px-4 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" placeholder="Name of your project" type="text" />
                        </div>
                    </div>

                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="submit" class="bg-gradient-to-r from-red-500 to-yellow-500 hover:from-red-600 hover:to-yellow-600 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Create
                    </button>
                    <button type="button" class="modal-quit mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div id="php" class="modal hidden fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <form id="php-form" class="form inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <input type="hidden" name="type" value="php" />
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="flex items-center justify-center flex-col">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-24 w-24 rounded-full bg-red-100">
                            <img src="./app/assets/img/volcan.png" />
                        </div>
                        <h3 class="text-xl font-bold">PHP</h3>
                    </div>
                    <p class="error text-red-500"></p>
                    <div class="mt-5">
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700">Name</label>
                            <input name="name" required class="w-full py-2 px-4 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" placeholder="Name of your project" type="text" />
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="css" class="block text-sm font-medium text-gray-700">Framework CSS</label>
                        <select name="css" class="w-full py-2 px-4 text-sm text-gray-700 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
                            <option>No Framework</option>
                            <?php for ($i = 0; $i < count($_ENV['RS_CSS']); $i++) {  ?>
                                <option value="<?= $i ?>"><?= $_ENV['RS_CSS'][$i][0] ?></option>
                            <?php }  ?>
                        </select>
                    </div>

                    <div class="mt-4">
                        <label class="block text-sm font-medium text-gray-700">Framework Javascript</label>
                        <div class="flex items-center">
                            <input name="jquery" type="checkbox" class="form-checkbox">
                            <span class="ml-2">Include jQuery</span>
                        </div>
                    </div>

                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="submit" class="bg-gradient-to-r from-red-500 to-yellow-500 hover:from-red-600 hover:to-yellow-600 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Create
                    </button>
                    <button type="button" class="modal-quit mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>


    <div id="laravel" class="modal hidden fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <form id="laravel-form" class="form inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <input type="hidden" name="type" value="laravel" />
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="flex items-center justify-center flex-col">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-24 w-24 rounded-full bg-red-100">
                            <img src="./app/assets/img/volcan.png" />
                        </div>
                        <h3 class="text-xl font-bold">Laravel</h3>
                        <p class="italic">(<a class="underline text-red-500" href="https://getcomposer.org/">Composer</a> is required)</p>
                    </div>
                    <p class="error text-red-500"></p>
                    <div class="mt-5">
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700">Name</label>
                            <input name="name" required class="w-full py-2 px-4 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" placeholder="Name of your project" type="text" />
                        </div>
                    </div>

                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="submit" class="bg-gradient-to-r from-red-500 to-yellow-500 hover:from-red-600 hover:to-yellow-600 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Create
                    </button>
                    <button type="button" class="modal-quit mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>

    <?php for ($i = 0; $i < count($_ENV['RS_PROJECT']); $i++) { ?>
        <div id="custom-<?= $i ?>" class="modal hidden fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <form id="laravel-form" class="form inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <input type="hidden" name="type" value="custom" />
                    <input type="hidden" name="project" value="<?= $i ?>" />
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="flex items-center justify-center flex-col">
                            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-24 w-24 rounded-full bg-red-100">
                                <img src="./app/assets/img/volcan.png" />
                            </div>
                            <h3 class="text-xl font-bold"><?= $_ENV['RS_PROJECT'][$i][0] ?></h3>
                        </div>
                        <p class="error text-red-500"></p>
                        <div class="mt-5">
                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700">Name</label>
                                <input name="name" required class="w-full py-2 px-4 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" placeholder="Name of your project" type="text" />
                            </div>
                        </div>

                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button type="submit" class="bg-gradient-to-r from-red-500 to-yellow-500 hover:from-red-600 hover:to-yellow-600 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                            Create
                        </button>
                        <button type="button" class="modal-quit mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    <?php  }  ?>

    <script src="./app/assets/js/jquery-3.6.0.min.js"></script>
    <script src="./app/assets/js/create.js"></script>
</body>

</html>