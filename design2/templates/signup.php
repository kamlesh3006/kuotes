<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>musewords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"
        integrity="sha384-Q6jCB9J4OTq5Jus/COFzrzlSJTQgkaa94bPuHfIeaLe5Rxrnr6jhD0pAnW2Zf3Th" crossorigin="anonymous">
    </script>
    <?php require_once '../partials/_navstyle.php'; ?>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <?php require_once("../partials/_homehead.php");?>
    <div class="center-container">
        <div class="form-container">
            <div class="login">
                <div class="col-4 bg-white border rounded p-4 shadow-sm">
                    <form>
                        <h1 class="h5 mb-3 fw-normal">Create new account</h1>
                        <div class="d-flex">
                            <div class="form-floating mt-1 col-6 ">
                                <input type="email" class="form-control rounded-0" placeholder="username/email">
                                <label for="floatingInput">first name</label>
                            </div>
                            <div class="form-floating mt-1 col-6">
                                <input type="email" class="form-control rounded-0" placeholder="username/email">
                                <label for="floatingInput">last name</label>
                            </div>
                        </div>
                        <div class="d-flex gap-3 my-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                    value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                                    value="option2">
                                <label class="form-check-label" for="exampleRadios3">
                                    Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                    value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Other
                                </label>
                            </div>
                        </div>
                        <div class="form-floating mt-1">
                            <input type="email" class="form-control rounded-0" placeholder="username/email">
                            <label for="floatingInput">email</label>
                        </div>
                        <div class="form-floating mt-1">
                            <input type="email" class="form-control rounded-0" placeholder="username/email">
                            <label for="floatingInput">username</label>
                        </div>
                        <div class="form-floating mt-1">
                            <input type="password" class="form-control rounded-0" id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword">password</label>
                        </div>

                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <button class="btn btn-primary" type="submit">Sign Up</button>
                            <a href="#" class="text-decoration-none">Already have an account ?</a>


                        </div>

                    </form>
                </div>
            </div>


        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>