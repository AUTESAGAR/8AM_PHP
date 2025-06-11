<?php
    error_reporting(0);
    include_once("./connection.php");
    $query = "SELECT * FROM `users`";
    $run = mysqli_query($conn,$query);

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query = "SELECT `photo` FROM `users` WHERE `id`='$id'";
        $run = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($run);
        $file = $data['photo'];
        if (file_exists($file)){
            if (unlink($file)) {
                $query = "DELETE FROM `users` WHERE `id`='$id'";
                $run = mysqli_query($conn,$query);
                header("Location:read.php");
            } else {
                echo "Error deleting the file";
            }
        } else {
            echo "File does not exist";
        }
    }    
?>
<table align="center" width="80%" border>
    <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th colspan="2">Operation</th>
    </tr>
        
    <?php while($data = mysqli_fetch_assoc($run)){ ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><img src="<?php echo $data['photo']; ?>" alt="" height="50px"></td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['mobile']; ?></td>
            <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
            <td><a href="read.php?id=<?php echo $data['id']; ?>">Delete</a></td>
        </tr>
    <?php } ?>

</table>