<!DOCTYPE html>
<html>
<head>
    <title>Add Employee<br></title>
</head>
<body>
    <h1>Add New Employee <br></h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Position:</label><br>
        <input type="text" name="position" value="{{ old('position') }}"><br><br>

        <label>Salary:</label><br>
        <input type="number" name="salary" value="{{ old('salary') }}"><br><br>

        <button type="submit">Add Employee</button>
    </form>

    <br>
    <a href="{{ route('employees.index') }}">Back to List</a>
</body>
</html>
