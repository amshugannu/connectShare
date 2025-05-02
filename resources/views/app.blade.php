@extends('first')
@section('title','Home page')



<!-- filepath: c:\My Stuff\LPU\SEM 6\Laravel\P!\resources\views\students\detail.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Detail</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $student['name'] }}</h1>
        <a href="{{ url('/students') }}">Back to Home</a>
    </div>
</body>
</html>




<!-- filepath: c:\My Stuff\LPU\SEM 6\Laravel\P!\resources\views\students\detail.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Detail</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
        }
    </style>
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
