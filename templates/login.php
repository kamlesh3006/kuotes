<?php
include("connect.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>musewords</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        button{
            background-color : #3E3E3F;
        }
        button:hover{
            background-color : #2b2b2b;
        }
    </style>
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="flex flex-col items-center" style="width: 200vw;">
        <div class="bg-white w-full max-w-md p-1 rounded-lg shadow-md mt-4 my-4">
            <img src="../img/logo.png" class="rounded-lg" alt="">
        </div>
        <div class="bg-white w-full max-w-md p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Login to Your Account</h1>

            <form action="login.php" method="POST" class="space-y-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
                    <input type="email" id="email" name="email"
                        class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-indigo-200 focus:outline-none" required="">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                    <input type="password" id="password" name="password"
                        class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-indigo-200 focus:outline-none" required="">
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember"
                            class="h-4 w-4 text-indigo-600 focus:ring focus:ring-indigo-200">
                        <label for="remember" class="ml-2 text-sm text-gray-400">Remember me</label>
                    </div>
                    <a href="#" class="text-sm text-gray-600 hover:underline">Forgot your password?</a>
                </div>

                <button type="submit"
                    class="w-full text-white py-2 rounded-md focus:ring focus:ring-gray-200 focus:outline-none">
                    Sign In
                </button>
            </form>
        </div>
        
        <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-md mt-4">
            <p class="text-md text-gray-400 text-center">
                Don't have an account? <a href="register.php" class="text-gray-600 hover:underline">&nbsp;Sign up here</a>.
            </p>
        </div>
    </div>

</body>

</html>
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];
    try{
        $checkpass = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($checkpass);
        if($result && $result->num_rows > 0){
            $row = $result->fetch_assoc();
            $hashedPassword = $row["password"];
            if(password_verify($password, $hashedPassword)){
                $_SESSION["email"] = $row["email"];
                echo "<script>window.location.href = 'home.php'</script>";
            } else{
                echo "<script>alert('Invalid credentials!');</script>";
                echo "<script>window.location.href = 'login.php'</script>";
            }
        } else{
            echo "<script>alert('Invalid credentials!');</script>";
            echo "<script>window.location.href = 'login.php'</script>";
        }
    } catch(mysqli_sql_exception) {
        echo "<script>alert('Error Logging in!');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    }
}
?>