<?php
  session_start();
  $conn = mysqli_connect("localhost","root","","trading");
  $course_id = $_POST['data'];
  $user_id = $_SESSION['user_id'];
  $query1 = "INSERT INTO `course_orders` VALUES('','$user_id','$course_id')";
  $run = mysqli_query($conn,$query1);
?>