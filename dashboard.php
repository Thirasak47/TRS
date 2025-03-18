<?php
session_start();
if (!isset($_SESSION['student_id'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="header-right">
        <h1>ยินดีต้อนรับ, รหัสนักศึกษา <?php echo $_SESSION['student_id']; ?></h1>
        <a href="logout.php" class="logout-link">ออกจากระบบ</a>
    </div>

    <section class="content"><br>
        <h2>📚 บทเรียนทั้งหมด</h2>
        <div class="lesson-list">
            <ul>
                <li><a href="lesson1.php">การใช้เทคโนโลยีอย่างปลอดภัย</a></li><br>
                <li><a href="lesson2.php">แนวคิดเชิงนามธรรม</a></li><br>
                <li><a href="lesson3.php">การแก้ปัญหา</a></li><br>
                <li><a href="lesson4.php">การโปรแกรม Scratch</a></li><br>
                <li><a href="lesson5.php">ข้อมูลและการประมวลผล</a></li><br>
                <li><a href="ee.html">แบบทดสอบ</a></li><br>
                <li><a href="score.html">รายชื่อนักศึกษา</a></li><br>
                <li><a href="teacher.html">ประวัติผู้สอน</a></li><br>
            </ul>
        </div>
    </section>
</body>
</html>