<?php 

$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

$conn = mysqli_connect('localhost','root','','crud') or die('Database is not connect.');
$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result = mysqli_query($conn,$sql) or die('Query is faild.');

header('Location: http://localhost/crud/index.php');
mysqli_close($conn);

