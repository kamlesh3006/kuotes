<?php
include("connect.php");
session_start();

if(!isset($_SESSION["email"])){
    echo "<script>alert('Login Unsuccessful!');</script>";
    header("login.php");
}
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
            z-index: 3;
        }
        section {
            min-height: 90vh;
            position: relative;
            z-index: 2;
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
            object-fit: cover; /* Ensure the image covers the entire screen */
            z-index: -1;
            filter: blur(3px);
            opacity: 80%;
        }
    </style>
</head>

<body class="bg-transparent">
<div class="container-bg">
    
    <img src="../img/bg.jpg" class="bg-image">
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
    <section class="bg-transparent dark:bg-gray-900 py-3 lg:py-3 antialiased">
        <div class="max-w-2xl mx-auto px-4">
<?php
$sortsql = "SELECT * FROM quotes ORDER BY orgdate DESC";
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
                                echo '<img src="https://source.unsplash.com/500x300/?person" class="mr-2 w-6 h-6 rounded-full" style="filter: blur(4px);">';
                                echo'<p class="inline-flex items-center mr-3 text-md text-gray-900 dark:text-white font-semibold" style="filter: blur(4px);"><img';
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
                            echo'<i class="fa-solid fa-share-nodes" style="color: #6b7280;"></i>';
                            echo'<p class="text-xs px-1">Share</p>';
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
