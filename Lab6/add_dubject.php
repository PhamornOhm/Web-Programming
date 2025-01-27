<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = $_POST['day'];
    $time_slot = $_POST['time_slot'];
    $subject_code = $_POST['subject_code'];
    $subject_name = $_POST['subject_name'];
    $room = $_POST['room'];
    $teacher = $_POST['teacher'];

    $sql = "INSERT INTO schedule (day, time_slot, subject_code, subject_name, room, teacher)
            VALUES ('$day', '$time_slot', '$subject_code', '$subject_name', '$room', '$teacher')";

    if ($conn->query($sql) === TRUE) {
        echo "New subject added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: index.php");
}
?>
