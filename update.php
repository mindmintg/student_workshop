<h1>ส่งค่า update</h1>
<?php
    require_once("dbcon.php");
    $sql = "UPDATE student SET
        student_fname = '{$_POST['student_fname']}',
        student_lname = '{$_POST['student_lname']}',
        student_bday = '{$_POST['student_bday']}',
        student_pin = '{$_POST['student_pin']}'
    WHERE student_id = '{$_POST['student_id']}' ";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?> 