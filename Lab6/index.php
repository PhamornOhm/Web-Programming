<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางเรียน</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        h1, h2 {
            text-align: center;
            color: #4CAF50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        table th {
            background-color: #4CAF50;
            color: white;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        table tr:hover {
            background-color: #ddd;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        form label {
            display: block;
            margin: 10px 0 5px;
        }
        form input, form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>ตารางเรียน</h1>
    <table>
        <thead>
            <tr>
                <th>Day</th>
                <th>Time</th>
                <th>Subject Code</th>
                <th>Subject Name</th>
                <th>Room</th>
                <th>Teacher</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM schedule";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['day']}</td>
                            <td>{$row['time_slot']}</td>
                            <td>{$row['subject_code']}</td>
                            <td>{$row['subject_name']}</td>
                            <td>{$row['room']}</td>
                            <td>{$row['teacher']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No data available</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <h2>เพิ่มวิชา</h2>
    <form action="add_dubject.php" method="POST">
        <label>Day:</label>
        <input type="text" name="day" required>
        
        <label>Time:</label>
        <input type="text" name="time_slot" required>
        
        <label>Subject Code:</label>
        <input type="text" name="subject_code">
        
        <label>Subject Name:</label>
        <input type="text" name="subject_name">
        
        <label>Room:</label>
        <input type="text" name="room">
        
        <label>Teacher:</label>
        <input type="text" name="teacher">
        
        <button type="submit">Add Subject</button>
    </form>
</body>
</html>
