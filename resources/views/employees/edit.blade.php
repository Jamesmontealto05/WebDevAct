<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
</head>
<body>
    <h1>Edit Employee</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name', $employee->name) }}"><br><br>

        <label>Position:</label><br>
        <input type="text" name="position" value="{{ old('position', $employee->position) }}"><br><br>

        <label>Salary:</label><br>
        <input type="number" name="salary" value="{{ old('salary', $employee->salary) }}"><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('employees.index') }}">Back to List</a>
</body>
</html>
