<?php
$students = [
    ["name" => "SUSWANTH", "reg_no" => "12206677","EMAIL" => "abc@gmail.com"],
    ["name" => "DEERAJ", "reg_no" => "12206674","EMAIL" => "abcde@gmail.com"],
    ["name" => "DHARA", "reg_no" => "12206673","EMAIL" => "abcdefg@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Student Details</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Registration Number</th>
            <th>Email Address</th>

        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo htmlspecialchars($student['name']); ?></td>
            <td><?php echo htmlspecialchars($student['reg_no']); ?></td>
            <td><?php echo htmlspecialchars($student['EMAIL']); ?></td>


        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>