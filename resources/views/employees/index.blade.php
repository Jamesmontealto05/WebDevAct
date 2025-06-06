<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>
</head>
<body>
    <h1>Employees</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Salary</th>
        </tr>
        @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->position }}</td>
            <td>{{ $employee->salary }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
