<?php
    include_once("./connection.php");
    
    if(isset($_POST['add']) && $_POST["name"] && $_POST["email"] && $_POST["mobile"] && $_FILES["photo"]["name"])
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $photo = $_FILES['photo']['name'];
        $tmp = $_FILES['photo']['tmp_name'];
        $folder = "./static/user/".$photo;
        move_uploaded_file($tmp,$folder);
        $query = "INSERT INTO `users` VALUES('','$name','$email','$mobile','$folder')";
        $run = mysqli_query($conn,$query);
        if($run){
            header("Location:read.php");
        }
        else{
            echo "Server Error";
        }
    }
    else{
        echo "All Fields Are Required";
    }
?>