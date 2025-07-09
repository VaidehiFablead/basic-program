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
        <form action="{{ route('students.login') }}" method="POST">
            @csrf
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

            <!-- 2 column grid layout for inline styling -->
            <div class="col mt-4 mb-4">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
            </div>


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4 ">Student Login</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="#!">Register</a></p>
                <p>or sign up with:</p>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- <script>
        $(document).ready(function() {

            $("#loginFormSubmit").on("submit", function(e) {
                e.preventDefault();

                let email = $("#email").val();
                let password = $("#password").val();
                $.ajax({
                    url: '{{ route('students') }}',
                    type: 'POST',
                    data: {
                        email: email,
                        password: password,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Login Successful',
                            text: 'Redirecting...',
                            timer: 2000,
                            showConfirmButton: false
                        });

                        // Redirect after short delay
                        setTimeout(() => {
                            window.location.href = "/studentDashboard";
                        }, 2000);
                    }
                });
            });
        });
    </script> --}}


    <script>
        $("form").on("submit", function(e) {
            e.preventDefault();

            $.ajax({
                url: '/students/login',
                type: 'POST',
                data: {
                    email: $('#email').val(),
                    password: $('#password').val(),
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    localStorage.setItem('student_token', response.token);
                    Swal.fire('Login successful!');
                    window.location.href = '/studentDashboard';
                },
                error: function(xhr) {
                    Swal.fire('Login failed', xhr.responseJSON.message, 'error');
                }
            });
        });
    </script>

</body>

</html>
