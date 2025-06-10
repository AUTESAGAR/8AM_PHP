<?php
    error_reporting(0);
    include_once("./connection.php");
    $query = "SELECT * FROM `users`";
    $run = mysqli_query($conn,$query);
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
    <?php do{ ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><img src="<?php echo $data['photo']; ?>" alt="" height="50px"></td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['mobile']; ?></td>
            <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
        </tr>
    <?php } while($data = mysqli_fetch_assoc($run)); ?>
</table>