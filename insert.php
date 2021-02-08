
<?php

require_once("dbcon.php");
$sql = "INSERT INTO student (student_id, student_fname, student_lname,student_bday, student_pin)
VALUES ('{$_POST['student_id']}', '{$_POST['student_fname']}','{$_POST['student_lname']}' ,'{$_POST['student_bday']}','{$_POST['student_pin']}')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>