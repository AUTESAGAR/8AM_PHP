<?php
    include_once("./connection.php");
    $id = $_GET['id'];
    $query = "SELECT * FROM `users` WHERE `id`='$id'";
    $run = mysqli_query($conn,$query);
    $data=mysqli_fetch_assoc($run);
?>
<center>
    <h3>Add New User <a href="read.php">Read Users</a> </h3>
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
        <p><input type="text" value="<?php echo $data['name'] ?>" name="name" placeholder="Enter Your name"></p>
        <p><input type="text" value="<?php echo $data['email'] ?>" name="email" placeholder="Enter Your email"></p>
        <p><input type="text" value="<?php echo $data['mobile'] ?>" name="mobile" placeholder="Enter Your mobile"></p>
        <p><img src="<?php echo $data['photo'] ?>" alt="" height="50px"></p>
        <p><input type="file" name="photo"></p>        
        <p><input type="submit" name="update"></p>
    </form>
</center>