<?php require "app/views/includes/header.php"; ?>
<?php require "app/views/includes/nav.php"; ?>
    <section class="bg-white dark:bg-gray-900 ">
        <div class="container flex items-center min-h-screen px-6 py-12 mx-auto">
            <div class="flex flex-col items-center max-w-sm mx-auto text-center">

                <!--            <h1 class="mt-3 text-2xl font-semibold text-gray-800 dark:text-white md:text-3xl"><?= $blog['title']; ?></h1>-->
                <p class="mt-4 text-gray-500 dark:text-gray-400">The page you are looking for doesn't exist. Here are
                    some
                    helpful links:</p>

                <div class="flex items-center w-full mt-6 gap-x-3 shrink-0 sm:w-auto">
                    <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm bg-blue-500 text-white  transition-colors duration-200  border rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-blue-600 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
                        Edit
                    </button>

                    <button class="w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-red-500 rounded-lg shrink-0 sm:w-auto hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-red-500">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </section>
<?php require "app/views/includes/footer.php"; ?>