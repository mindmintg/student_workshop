<?php 
    require_once("dbcon.php");

    $sql = "SELECT * FROM student where student_id = '{$_GET['id']}'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
    }
?>

<h3>แก้ไขนักศึกษา<small><a href=".">ย้อนกลับ</a></small></h3>

<form action="update.php" method="post">
    <label for="student_id">รหัสนักศึกษา :</label>
    <input type="hidden" name="student_id" id="student_id" value = "<?php echo $row['student_id']?>">
    <?php echo $row['student_id']?>
    <br><br>
    <label for="student_fname">ชื่อ :</label>
    <input type="text" name="student_fname" id="student_fname" value = "<?php echo $row['student_fname']?>">
    <br><br>
    <label for="student_lname">นามสกุล :</label>
    <input type="text" name="student_lname" id="student_lname" value = "<?php echo $row['student_lname']?>">
    <br><br>
    <label for="student_bday">วันเดือนปีเกิด :</label>
    <input type="date" name="student_bday" id="student_bday" value = "<?php echo $row['student_bday']?>">
    <br><br>
    <label for="student_pin">pin :</label>
    <input type="text" name="student_pin" id="student_pin" value = "<?php echo $row['student_pin']?>">
    <br><br>
    <button type="submit">ยืนยัน</button>
    <button type="reset">ล้างข้อมูล</button>
</form>
