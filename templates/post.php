<?php
session_start();
include("connect.php");

// Check if the user is not logged in
if (!isset($_SESSION['email'])) {
    echo "<script>alert('Login Unsuccessful!');</script>";
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mailid = $_SESSION["email"];
    $text = $_POST["text"];
    $date = date('l, F j, Y');
    $currentDate = date("Y-m-d H:i:s");
    $getid = "SELECT userid FROM users WHERE email = '$mailid'";
    
    $result = $conn->query($getid);

    try {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $postuserid = $row["userid"];
            $postsql = "INSERT INTO quotes VALUES (null, '$postuserid', '$text', '$date', '$currentDate)";
            mysqli_query($conn, $postsql);
            echo "<script>alert('Successfully Posted!');</script>";
            echo "<script>window.location.href = 'home.php';</script>";
        }
    } catch (mysqli_sql_exception $e) {
        echo "Error : " . $e->getMessage();
        echo "<script>alert('Error Posting!');</script>";
        echo "<script>window.location.href = 'home.php';</script>";
    }
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
        }

        body {
            margin-top: 80px;
        }
        .post{
            z-index: 100;
        }
    </style>
    <style>
        button{
            background-color : #3E3E3F;
        }
        button:hover{
            background-color : #2b2b2b;
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
                <a href="post.php"><i class="fa-solid fa-pen-to-square px-2" style="color: #3E3E3F;"></i></a>
                <a href="logout.php"><i class="fa-solid fa-power-off px-2" style="color: #3E3E3F;"></i></a>
            </div>
        </div>
    </header>
        
    <section class=" post bg-white dark:bg-gray-900 py-8 lg:py-16 antialiased">
        <div class="max-w-2xl mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
              <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">What's on your mind?</h2>
          </div>
          <form action="" method="POST" class="mb-6">
              <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                  <label for="text" class="sr-only">Type here</label>
                  <textarea id="text" rows="6" name="text"
                      class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                      placeholder="Type here..." required=""></textarea>
              </div>
              <button type="submit"
                  class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900">
                  Post comment
              </button>
          </form>
          <div class="text-justify">
            
            <h2 class="mb-2 text-lg font-semibold underline text-right text-gray-900 dark:text-white">
            Important key points to remember :</h2><br>
            <ul class="space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                <li>
                Uphold community respect. Comments promoting hate, harm, or self-harm will be removed.
                </li>
                <li>Consider the impact of your words. Avoid content that may be hurtful or offensive.</li>
                <li>Embrace diversity and inclusion. Discrimination based on race, gender, religion, or any other form will not be tolerated.</li>
                <li>Choose your words wisely. Profanity, excessive swearing, or explicit content may result in content removal.</li>
                <li>Foster a supportive environment. Encourage positive interactions and discourage negativity.</li>
                <li>To maintain a diverse and engaging environment, please avoid reposting the same quotes repeatedly. Duplicate content can diminish the variety of posts and may lead to a less enjoyable experience for our community.</li>
            </ul>
            

          </div>
        </div>
    </section>

</body>

</html>
