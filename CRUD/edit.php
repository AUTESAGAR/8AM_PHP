<?php
    error_reporting(0);
    include_once("./connection.php");
    $id = $_GET['id'];
    $result="";
    $query = "SELECT * FROM `users` WHERE `id`='$id'";
    $run = mysqli_query($conn,$query);
    $data=mysqli_fetch_assoc($run);

    if(isset($_POST['update']) && $_POST["name"] && $_POST["email"] && $_POST["mobile"] || $_FILES['photo']['name'])
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        if($_FILES['photo']['name']){
            $photo = $_FILES['photo']['name'];        
            $tmp = $_FILES['photo']['tmp_name'];
            $folder = "./static/user/".time()."_".$photo;
            move_uploaded_file($tmp,$folder);
            $query = "UPDATE `users` SET `name`='$name',`email`='$email',`mobile`='$mobile',`photo`='$folder' WHERE `id`='$id'";
            $run = mysqli_query($conn,$query);
            if($run){
                $result = "User Info Updated Success";
                header("refresh:1,url=read.php");
            }
            else{
                $result = "Server Error";
            }
        }
        else{
            $query = "UPDATE `users` SET `name`='$name',`email`='$email',`mobile`='$mobile' WHERE `id`='$id'";
            $run = mysqli_query($conn,$query);
            if($run){
                $result = "User Info Updated Success";
                header("refresh:1,url=read.php");
            }
            else{
                $result = "Server Error";
            }
        }
    }    
?>
<center>
    <h3>Add New User <a href="read.php">Read Users</a> </h3>
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
        <p><input type="text" value="<?php echo $data['name'] ?>" name="name" placeholder="Enter Your name"></p>
        <p><input type="text" value="<?php echo $data['email'] ?>" name="email" placeholder="Enter Your email"></p>
        <p><input type="text" value="<?php echo $data['mobile'] ?>" name="mobile" placeholder="Enter Your mobile"></p>
        <p><img src="<?php echo $data['photo'] ?>" alt="user" height="50px"></p>
        <p><input type="file" name="photo"></p>
        <p><?php echo $result; ?></p>
        <p><input type="submit" name="update"></p>
    </form>
</center>