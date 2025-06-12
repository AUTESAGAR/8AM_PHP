<?php
    $conn = mysqli_connect("localhost","root","","trading");
    session_start();
    $id = $_SESSION["user_id"];
    echo $id;
    $query = "SELECT * FROM `users` WHERE `id`='$id'";        
    $run = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($run);
    $data['name'];
?>

<?php include_once("components/header.php"); ?>

<h1>
    <a href="logout.php">Logout</a>
</h1>

<?php require_once("components/footer.php"); ?>

