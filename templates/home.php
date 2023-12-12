<?php
include("connect.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/38bbbd6e81.js" crossorigin="anonymous"></script>
    <script src="../tailwind.config.js"></script>
    <style>
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1rem 2rem; /* Adjust the padding as needed */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        body {
            margin-top: 80px;
        }
    </style>
</head>

<body class="bg-white">

    <!-- Top Bar -->
    <header class="p-8 bg-white">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo -->
            <a href="home.php"><img src="../img/logo1.png" alt="Logo" class="h-7"></a>

            <!-- Power Button Icon for Logout -->
            <div class="text-xl">
                <a href="profile.php"><i class="fa-regular fa-user px-2" style="color: #3E3E3F;"></i></a>
                <a href="post.php"><i class="fa-regular fa-pen-to-square px-2" style="color: #3E3E3F;"></i></a>
                <a href="logout.php"><i class="fa-solid fa-power-off px-2" style="color: #3E3E3F;"></i></a>
            </div>
        </div>
    </header>

    <section class="bg-white dark:bg-gray-900 py-6 lg:py-6 antialiased">
        <div class="max-w-2xl mx-auto px-4">
            <article class="p-6 mt-3 text-base bg-white border-b rounded-lg dark:bg-gray-900">
                <footer class="flex justify-between items-center mb-2">
                    <div class="flex items-center">
                        <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><img
                                class="mr-2 w-6 h-6 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                alt="Michael Gough">Michael Gough</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                                title="February 8th, 2022">Feb. 8, 2022</time></p>
                    </div>
                </footer>
                <p class="text-gray-500 dark:text-gray-400">Very straight-to-point article. Really worth time reading. Thank you! But tools are just the
                    instruments for the UX designers. The knowledge of the design tools are as important as the
                    creation of the design strategy.</p>
            <div class="flex justify-end mt-4 space-x-4">
                <button type="button" class="flex items-center text-sm text-gray-500 dark:text-gray-400 font-medium">
                    <i class="fa-regular fa-bookmark" style="color: #6b7280;"></i>
                    <p class="text-sm px-2">Save</p>
                </button>
            </div>
            </article>
            
        </div>
    </section>
</body>

</html>
