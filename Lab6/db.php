<?php
// เชื่อมต่อ Database
$host = "localhost";
$conn = new mysqli($host, "root", "", "timetable_db");

// การตั้งค่าภาษา รองรับภาษาไทย
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
