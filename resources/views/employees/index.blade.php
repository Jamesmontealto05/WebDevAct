<!DOCTYPE html>
<html>
<head>
    <title>Employees</title>
</head>
<body>
    <h1>Employee List</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('employees.create') }}">Add New Employee</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Salary</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->position }}</td>
            <td>{{ $employee->salary }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
