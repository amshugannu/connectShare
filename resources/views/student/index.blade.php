<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    
</head>
<body>
    <div class="container">
        <h1>Student List</h1>
        <ul>
            @foreach($students as $student)
                <li><a href="{{ url('/students/' . $student['id']) }}">{{ $student['name'] }}</a></li>
            @endforeach
        </ul>
    </div>
</body>
</html>
