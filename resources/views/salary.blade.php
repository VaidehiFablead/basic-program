<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salary Form</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header text-center">
                        <h2>Salary</h2>
                    </div>

                    <div class="card-body">
                        <form action={{ route('salary.store') }} method="POST">
                            @csrf
                            <!-- Name Field -->
                            <div class="mb-3">
                                <label for="emp_id" class="form-label">Select Employee</label>
                                <select name="emp_id" class="form-select">
                                    @foreach ($employees as $emp)
                                        <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Email Field -->
                            <div class="mb-3">
                                <label for="salary" class="form-label">salary</label>
                                <input type="number" id="salary" name="salary" class="form-control"
                                    placeholder="Enter your salary" required>
                            </div>
                            <!-- Address Field -->
                            <div class="mb-3">
                                <label for="attendance" class="form-label">Attendance</label>
                                <input type="number" id="attendance" name="attendance" class="form-control"
                                    placeholder="Enter your attendance" required>
                            </div>
                            <!-- Contact Field -->
                            <div class="mb-3">
                                <label for="leave" class="form-label">Leave</label>
                                <input type="number" id="leave" name="leave" class="form-control" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <small>&copy; 2025 Your Company</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle (including Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
