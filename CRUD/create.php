<?php
    include_once("./connection.php");
    $result="";
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
            $result = "User Added Success";
            header("refresh:1,url=read.php");
        }
        else{
            $result = "Server Error";
        }
    }
    else if(isset($_POST['add'])){
       $result = "All Fields Are Required";
    }
?>
<center>

    <h3>Add New User <a href="read.php">Read Users</a> </h3>
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
        <p><input type="text" name="name" placeholder="Enter Your name"></p>
        <p><input type="text" name="email" placeholder="Enter Your email"></p>
        <p><input type="text" name="mobile" placeholder="Enter Your mobile"></p>
        <p><input type="file" name="photo"></p>
        <p><?php echo $result; ?></p>
        <p><input type="submit" name="add"></p>
    </form>
</center>