<?php
    require_once("dbcon.php");
    if(isset($_GET['delete'])){
      echo $_GET['id'];
      $sql = "DELETE FROM student WHERE student_id = '{$_GET['id']}'";
      if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }
    }
    $sql = "SELECT * FROM student";
    if(isset($_GET['search_click'])) {
      $sql = "SELECT * FROM student WHERE student_id LIKE '%{$_GET['search']}%' OR student_fname LIKE '%{$_GET['search']}%' ";
      echo "<p>คุณกำลังค้นหา : {$_GET['search']}</p>";
  }
    $result = $conn->query($sql);
?>
<a href ="insert_from.php">เพิ่มนักศึกษา</a>
<form action="" method="get">
  <label for="search">ช่องค้นหา</label>
  <input type ="text" name = "search" id = "search">
  <button type="submit" name = "search_click">ค้นหา</button>
</form>
<form action="" method="post">
    <button type="submit" name="logout">ออกจากระบบ</button>
</form>
<table style="width:100%;" border="1">
  <tr>
    <th>รหัสนักศึกษา</th>
    <th>ชื่อ</th>
    <th>นามสกุล</th>
    <th>วันเกิด</th>
    <th>Pin</th>
    <th>เครื่องมือ</th>
  </tr>
  <?php
  if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $row['student_id'];?></td>
    <td><?php echo $row['student_fname'];?></td>
    <td><?php echo $row['student_lname'];?></td>
    <td><?php echo $row['student_bday'];?></td>
    <td><?php echo $row['student_pin'];?></td>
    <td align = "center">
      <a href ="update_from.php?student_id=<?php echo $row['student_id']; ?>">แก้ไข</a>
      <a href ="?delete=1&id=<?php echo $row['student_id']; ?>">ลบ</a>
    </td>
  </tr>
  <?php 
  }
} else {
  echo "0 results";
  }
$conn->close();
?>
</table>