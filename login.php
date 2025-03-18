<?php
// เริ่มต้น session ใหม่หรือดำเนินการ session ที่มีอยู่แล้ว
session_start();

// สร้างการเชื่อมต่อกับฐานข้อมูล MySQL
$conn = new mysqli("localhost", "root", "", "lesson_db");

// ตรวจสอบว่าการเชื่อมต่อมีข้อผิดพลาดหรือไม่ ถ้ามีให้หยุดการทำงานของสคริปต์
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// รับข้อมูล student_id และ password จากฟอร์มที่ส่งมาทาง HTTP POST
$student_id = $_POST['student_id'];
$password = $_POST['password'];

// สร้างคำสั่ง SQL เพื่อค้นหาข้อมูลนักเรียนที่มี student_id และ password ตรงกับที่กรอกมา
$sql = "SELECT * FROM students WHERE student_id='$student_id' AND password='$password'";
$result = $conn->query($sql);

// ตรวจสอบว่ามีผลลัพธ์จากการค้นหาหรือไม่
if ($result->num_rows > 0) {
    // ถ้ามีผลลัพธ์ ให้ตั้งค่าตัวแปร session student_id และเปลี่ยนหน้าไปที่ dashboard.php
    $_SESSION['student_id'] = $student_id;
    header("Location: dashboard.php");
} else {
    // ถ้าไม่มีผลลัพธ์ ให้แสดงข้อความแจ้งเตือนและเปลี่ยนหน้าไปที่ index.html
    echo "<script>alert('รหัสนักศึกษาหรือรหัสผ่านไม่ถูกต้อง!'); window.location='index.html';</script>";
}

// ปิดการเชื่อมต่อกับฐานข้อมูล
$conn->close();
?>