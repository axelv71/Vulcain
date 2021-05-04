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

<body class="">
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">

        <?php require('./app/views/components/sidebar.php') ?>

        <div class="flex flex-col flex-1 w-full">
            <?php require('./app/views/components/topbar.php') ?>

            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        Custom Projects
                    </h2>
                    <!-- New Table -->
                    <?php if ($countCustom > 0) { ?>
                        <div class="w-full overflow-hidden rounded-lg shadow-xs">
                            <div class="w-full overflow-x-auto">
                                <table class="w-full whitespace-no-wrap">
                                    <thead>
                                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                            <th class="px-4 py-3">Name</th>
                                            <th class="px-4 py-3">Type</th>
                                            <th class="px-4 py-3">Date</th>
                                            <th class="px-4 py-3">Open</th>
                                            <th class="px-4 py-3">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                                        <?php while ($row = $allCustom->fetch()) { ?>
                                            <tr class="text-gray-700 dark:text-gray-400">
                                                <td class="px-4 py-3">
                                                    <div class="flex items-center text-sm">
                                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                            <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="laravel" class="svg-inline--fa fa-laravel fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-6 400H54c-3.3 0-6-2.7-6-6V86c0-3.3 2.7-6 6-6h340c3.3 0 6 2.7 6 6v340c0 3.3-2.7 6-6 6z"></path>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <p class="font-semibold"><?= $row['name'] ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-4 py-3 text-sm">
                                                    <?= $row['type'] ?>
                                                </td>
                                                <td class="px-4 py-3 text-sm">
                                                    <?= $row['datetime'] ?>
                                                </td>
                                                <td class="px-4 py-3 text-sm">
                                                    <a href="./public/<?= $row['path'] ?>" class="bg-gradient-to-r from-red-500 to-yellow-500 hover:from-red-600 hover:to-yellow-600 text-white font-bold py-2 px-4 rounded-full">
                                                        Open
                                                    </a>
                                                </td>
                                                <td class="px-4 py-3 text-sm">
                                                    <button data-target-id="<?= $row['id'] ?>" data-target-path="<?= $row['path'] ?>" class="delete-button bg-gradient-to-r from-red-400 to-red-600 hover:from-red-500 hover:to-red-700 text-white font-bold py-2 px-4 rounded-full">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </main>
        </div>
    </div>

    <script src="./app/assets/js/jquery-3.6.0.min.js"></script>
    <script src="./app/assets/js/manage.js"></script>
</body>

</html>