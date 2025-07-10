<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>view emp</title>
</head>

<body>
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center w-25 m-5">
            <thead class="table-dark">
                <tr>
                    <th>Emp Id</th>
                    <th>Emp Name</th>
                    <th>Emp Salary</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($salaries as $salary)
                    <tr>
                        {{-- <td>{{ $salary->employee->id }}</td>
                        <td>{{ $salary->employee->name }}</td> --}}
                        <td>{{ $salary->employee->id ?? 'N/A' }}</td>   
                        <td>{{ $salary->employee->name ?? 'N/A' }}</td>
                        <td>{{ $salary->salary }}</td>
                        <td>
                            @if ($salary->employee)
                                <a href="{{ route('emp.edit', $salary->employee->id) }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                            @else
                                <span class="text-muted">No Employee</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
