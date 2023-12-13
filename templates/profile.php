<?php
include("connect.php");
session_start();
if (!isset($_SESSION['userid'])) {
    echo "<script>alert('Login Unsuccessful!');</script>";
    header("Location: login.php");
    exit();
}
$nameofuser = $_SESSION["username"];
$userself = $_SESSION["userid"];
$useremail = $_SESSION["email"]
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
        .editbutton {
            background-color: #3E3E3F;
        }

        .editbutton:hover {
            background-color: #2b2b2b;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1rem 2rem;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            z-index: 3;
        }

        section {
            min-height: 90vh;
            position: relative;
            z-index: 2;
            margin-top: 10vh; /* Adjusted margin for body in mobile view */
        }

        body {
            margin-top: 10vh;
        }

        .container-bg {
            position: relative;
            z-index: 2;
        }

        .bg-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
            filter: blur(3px);
            opacity: 80%;
        }

        @media (max-width: 640px) {
            /* Adjustments for small screens */
            header {
                padding: 1rem; /* Adjusted padding for header in mobile view */
            }

            .container-bg {
                padding-top: 0; /* Removed top padding for container in mobile view */
            }

            .bg-image {
                height: 100vh; /* Adjusted height of background image in mobile view */
            }

            .max-w-full {
                padding: 0 1rem; /* Adjusted padding for container in mobile view */
            }

            .rounded-full {
                margin-right: 0; /* Removed margin for profile picture in mobile view */
            }

            .flex-col-md {
                flex-direction: column;
            }
        }
    </style>
</head>

<body class="font-sans bg-transparent">
    <div class="container-bg">
        <img src="../img/bg.jpg" class="bg-image">
        <!-- Top Bar -->
        <header class="p-8 bg-white">
            <div class="container mx-auto flex items-center justify-between">
                <!-- Logo -->
                <a href="home.php"><img src="../img/logo1.png" alt="Logo" class="h-7"></a>

                <!-- Power Button Icon for Logout -->
                <div class="text-xl">
                    <a href="profile.php"><i class="fa-solid fa-user px-2" style="color: #3E3E3F;"></i></a>
                    <a href="post.php"><i class="fa-regular fa-pen-to-square px-2" style="color: #3E3E3F;"></i></a>
                    <a href="logout.php"><i class="fa-solid fa-power-off px-2" style="color: #3E3E3F;"></i></a>
                </div>
            </div>
        </header>
        <div class="max-w-full mx-auto pt-4 px-4">
            <!-- Profile Header -->
            <div
                class="flex flex-col md:flex-row items-center justify-between p-6 bg-white mt-2 rounded-lg border shadow flex-col-md">
                <div class="mb-4 md:mb-0 md-mr-12 flex items-center">
                    <img src="https://via.placeholder.com/150" alt="Profile Picture"
                        class="w-48 h-48 rounded-full md-mr-4 rounded-full">
                    <div class="md-ml-4 mt-4 md:mt-0">
                        <h1 class="text-2xl font-semibold px-2"><?php echo $nameofuser; ?></h1>
                        <p class="text-gray-600 text-xs px-2"><?php echo $useremail; ?></p>
                    </div>
                </div>

                <div class="mt-4 md:mt-0 md-w-1/2">
                    <p class="text-gray-400 text-justify text-sm">
                        At "musewords," we prioritize your privacy and security. For your peace of mind, we've implemented
                        robust measures to ensure that your personal information remains private and confidential. For
                        privacy and anonymity, your name, email, and profile picture are hidden from other users. We've
                        provided a default profile picture for you. Remember, your data is visible only to you and not to
                        other users. Feel free to explore and share without worrying about your personal information being
                        disclosed. Enjoy "musewords" with peace of mind!
                        <br><br>
                    </p>
                </div>
            </div>
        </div>
        <section class="bg-transparent dark:bg-gray-900 py-4 lg:py-4 antialiased">
            <div class="max-w-2xl mx-auto px-4">
                <div class="flex justify-center">
                    <p class="mx-auto font-semibold text-center p-1 shadow bg-gray-50 rounded-md"
                        style="width: 100vh;">Your Quotes</p>
                </div>
                <?php
                    #echo $userself;
                    $sortsql = "SELECT * FROM quotes WHERE userid = $userself ORDER BY orgdate DESC";
                    try{
                        $result = mysqli_query($conn, $sortsql);
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){
                                $quoteuser = $row["userid"];
                                $quotedate = $row["date"];
                                $quotedata = $row["text"];
                                $quote_id = $row["quote_id"];
                                $userdata = "SELECT * FROM users WHERE userid = $quoteuser";
                                $sqlquery = mysqli_query($conn, $userdata);
                                $getname = mysqli_fetch_assoc($sqlquery);
                                $quotename = $getname["fname"] . ' ' . $getname["lname"];
                                        echo'<article class="p-6 mt-3 text-base text-lg bg-white border rounded-lg dark:bg-gray-900">';
                                            echo'<footer class="flex justify-between items-center">';
                                                echo'<div class="flex items-center">';
                                                    echo '<img src="https://source.unsplash.com/500x300/?person" class="mr-2 w-6 h-6 rounded-full"">';
                                                    echo'<p class="inline-flex items-center mr-3 text-md text-gray-900 dark:text-white font-semibold";"><img';
                                                            echo'class="mr-2 w-6 h-6 rounded-full"';
                                                            echo'src="https://source.unsplash.com/150x150/?person"';
                                                            echo'alt="Username">'. $quotename .'</p>';
                                                    echo'<p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"';
                                                        echo' title="February 8th, 2022">'. $quotedate .'</time></p>';
                                                echo'</div>';
                                            echo'</footer>';
                                            echo'<p class="save-button py-2 text-gray-500 dark:text-gray-400" data-quoteid="'.$quote_id.';">'. $quotedata .'</p>';
                                        echo'<div class="flex justify-end mt-4 space-x-4">';
                                            echo'<button type="button" class="flex items-center text-sm text-gray-500 dark:text-gray-400 font-medium">';
                                                echo'<i class="fa-regular fa-bookmark" style="color: #6b7280;"></i>';
                                                echo'<p class="text-sm px-2">Save</p>';
                                            echo'</button>';
                                        echo'</div>';
                                        echo'</article>';
                                                
                                        
                                    }
                                }
                            } catch(mysqli_sql_exception $e) {
                                echo $e;
                            }
                    ?>
            </div>
        </section>
    </div>
</body>

</html>
