<!DOCTYPE html>
<html>
<head>
    <title>Employees</title>
    <style>
        body {
            margin: 0;
            padding: 40px 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px 40px 70px; /* Added bottom padding for button space */
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            position: relative;
            text-align: left; /* so text inside aligns left */
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .logout-form {
            position: absolute;
            top: 30px;
            right: 40px;
        }

        .logout-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 8px 15px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }

        .success-message {
            color: green;
            margin-bottom: 15px;
        }

        /* Add New Employee button fixed bottom-right inside container */
        .add-button {
            position: absolute;
            bottom: 20px;
            right: 40px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
            transition: background-color 0.3s ease;
        }

        .add-button:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
        }

        a.edit-link {
            color: #007bff;
            text-decoration: none;
            margin-right: 10px;
        }

        a.edit-link:hover {
            text-decoration: underline;
        }

        button.delete-btn {
            background-color: #dc3545;
            color: white;
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button.delete-btn:hover {
            background-color: #c82333;
        }

        form {
            display: inline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Employee List</h1>

        <form class="logout-form" method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn" onclick="return confirm('Are you sure you want to logout?')">Logout</button>
        </form>

        @if(session('success'))
            <p class="success-message">{{ session('success') }}</p>
        @endif

        <table>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->position }}</td>
                <td>{{ $employee->salary }}</td>
                <td>
                    <a class="edit-link" href="{{ route('employees.edit', $employee->id) }}">Edit</a>

                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="delete-btn" type="submit" onclick="return confirm('Delete this employee?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        <a class="add-button" href="{{ route('employees.create') }}">Add New Employee</a>
    </div>
</body>
</html>
