<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuote</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        button {
            background-color: #3E3E3F;
        }

        button:hover {
            background-color: #2b2b2b;
        }
    </style>
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="flex flex-col items-center w-full max-w-2xl mx-auto">
        <div class="bg-white w-full max-w-md p-1 rounded-lg shadow-md mt-4 my-4">
            <img src="../img/logo.png" class="rounded-lg" alt="">
        </div>
        <div class="bg-white w-full max-w-md p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Create Your Account</h1>

            <form action="#" method="POST" class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="firstName" class="block text-sm font-medium text-gray-600">First Name</label>
                        <input type="text" id="firstName" name="firstName"
                            class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-indigo-200 focus:outline-none" required="">
                    </div>
                    <div>
                        <label for="lastName" class="block text-sm font-medium text-gray-600">Last Name</label>
                        <input type="text" id="lastName" name="lastName"
                            class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-indigo-200 focus:outline-none" required="">
                    </div>
                </div>

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

                <div>
                    <label for="acceptTerms" class="flex items-center">
                        <input type="checkbox" id="acceptTerms" name="acceptTerms"
                            class="h-4 w-4 text-indigo-600 focus:ring focus:ring-indigo-200">
                        <span class="ml-2 text-sm text-gray-600">I accept the Terms and Conditions</span>
                    </label>
                </div>

                <button type="submit"
                    class="w-full text-white py-2 rounded-md focus:ring focus:ring-gray-200 focus:outline-none">
                    Sign Up
                </button>
            </form>
        </div>

        <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-md mt-4">
            <p class="text-md text-gray-400 text-center">
                Already have an account? <a href="login.html" class="text-gray-600 hover:underline">&nbsp;Sign in here</a>.
            </p>
        </div>
    </div>

</body>

</html>
