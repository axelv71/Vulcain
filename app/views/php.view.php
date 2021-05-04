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
                        PHP Projects
                    </h2>
                    <!-- New Table -->
                    <?php if ($countPhp > 0) { ?>
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

                                        <?php while ($row = $allPhp->fetch()) { ?>
                                            <tr class="text-gray-700 dark:text-gray-400">
                                                <td class="px-4 py-3">
                                                    <div class="flex items-center text-sm">
                                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="php" class="w-5 h-5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                                <path fill="currentColor" d="M320 104.5c171.4 0 303.2 72.2 303.2 151.5S491.3 407.5 320 407.5c-171.4 0-303.2-72.2-303.2-151.5S148.7 104.5 320 104.5m0-16.8C143.3 87.7 0 163 0 256s143.3 168.3 320 168.3S640 349 640 256 496.7 87.7 320 87.7zM218.2 242.5c-7.9 40.5-35.8 36.3-70.1 36.3l13.7-70.6c38 0 63.8-4.1 56.4 34.3zM97.4 350.3h36.7l8.7-44.8c41.1 0 66.6 3 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7h-70.7L97.4 350.3zm185.7-213.6h36.5l-8.7 44.8c31.5 0 60.7-2.3 74.8 10.7 14.8 13.6 7.7 31-8.3 113.1h-37c15.4-79.4 18.3-86 12.7-92-5.4-5.8-17.7-4.6-47.4-4.6l-18.8 96.6h-36.5l32.7-168.6zM505 242.5c-8 41.1-36.7 36.3-70.1 36.3l13.7-70.6c38.2 0 63.8-4.1 56.4 34.3zM384.2 350.3H421l8.7-44.8c43.2 0 67.1 2.5 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7H417l-32.8 168.7z"></path>
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