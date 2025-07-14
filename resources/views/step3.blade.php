<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 3 - Review & Submit</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow rounded">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0">Step 3: Review & Submit</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('form.submit') }}">
                            @csrf

                            <div class="mb-3">
                                <strong>Name:</strong>
                                <p class="form-control-plaintext">{{ $data['name'] }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Email:</strong>
                                <p class="form-control-plaintext">{{ $data['email'] }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Phone:</strong>
                                <p class="form-control-plaintext">{{ $data['phone'] }}</p>
                            </div>

                            <div class="mb-3">
                                <strong>Address:</strong>
                                <p class="form-control-plaintext">{{ $data['address'] }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="city" class="form-label">City:</label>
                                <input type="text" name="city" id="city" class="form-control" placeholder="Enter city" required>
                            </div>

                            <div class="mb-3">
                                <label for="state" class="form-label">State:</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder="Enter state" required>
                            </div>

                            <button type="submit" class="btn btn-warning">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
