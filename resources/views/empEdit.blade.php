<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Employee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Edit Employee</h2>

    {{-- @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif --}}

    <form action="{{ route('emp.update', $employee->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $employee->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $employee->email }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Address</label>
            <textarea name="address" class="form-control" required>{{ $employee->address }}</textarea>
        </div>

        <div class="mb-3">
            <label>Contact</label>
            <input type="text" name="contact" value="{{ $employee->contact }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Branch</label>
            <input type="text" name="branch" value="{{ $employee->branch }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        {{-- <a href="{{ url('/salary') }}" class="btn btn-secondary">Cancel</a> --}}
    </form>
</div>
</body>
</html>