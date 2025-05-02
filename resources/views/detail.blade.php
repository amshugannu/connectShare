<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Detail</title>
    
</head>
<body>
    <div class="container">
        <h1>{{ $student['name'] }}</h1>
        <h3>Age: {{ $student['age'] }}</h3>
        <p><strong>Course Code:</strong> {{ $student['course_code'] }}</p>
        <a href="{{ url('/students') }}">Back to Menu</a>
    </div>
</body>
</html>
