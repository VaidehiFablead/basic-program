<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>

<body>
    <div class="container mt-5">
        <form class="pt-5" id="loginFormSubmit" method="POST">
            @csrf

             <!-- name input -->
            <div class="form-outline mb-4 mt-5">
                <input type="text" id="name" class="form-control" />
                <label class="form-label" for="name">Name</label>
            </div>
            <!-- Email input -->
            <div class="form-outline mb-4 mt-5">
                <input type="email" id="email" class="form-control" />
                <label class="form-label" for="email">Email address</label>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="password" class="form-control" />
                <label class="form-label" for="password">Password</label>
            </div>

             <!-- age input -->
            <div class="form-outline mb-4 mt-5">
                <input type="number" id="age" class="form-control" />
                <label class="form-label" for="age">Email address</label>
            </div>

            
            <!-- 2 column grid layout for inline styling -->
            <div class="col mt-4 mb-4">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
            </div>


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4 ">Student Register</button>

            <!-- Register buttons -->
            <div class="text-center">
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                </button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>