<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 560px; margin: 40px auto; padding: 0 16px; }
        label { display: block; margin-bottom: 6px; }
        input { box-sizing: border-box; width: 100%; padding: 9px; margin-bottom: 16px; }
        button { padding: 10px 16px; cursor: pointer; }
        .success { color: #167a2f; }
        .error { color: #b42318; }
    </style>
</head>
<body>
    <h2>Student Registration Form</h2>

    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required>

        <label for="email">Email:</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>

        <label for="course">Course:</label>
        <input id="course" type="text" name="course" value="{{ old('course') }}" required>

        <button type="submit">Insert Data</button>
    </form>
</body>
</html>
