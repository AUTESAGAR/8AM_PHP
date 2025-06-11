<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="logo" id="">
    <input type="submit" value="Update" name="logo">
</form>

<?php
    $conn = mysqli_connect("127.0.0.1","root","","logo");
    $query = "SELECT * FROM `logo`";
    $run = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($run);    

    if(isset($_POST['logo'])){
        $file = $data['name'];
        if (file_exists($file)) { 
            if (unlink($file)) {
                $name = $_FILES['logo']['name'];
                $tmp_name = $_FILES['logo']['tmp_name'];
                $folder = "./static/logo/".$name;
                move_uploaded_file($tmp_name,$folder);
                $query1 = "UPDATE `logo` SET `name`='$folder'";
                $run1 = mysqli_query($conn,$query1);
                header("Location:logo.php");
            } else {
                echo "Error deleting the file";
            }
        } else {
            echo "File does not exist";
        }
    }
?>

<img src="<?php echo $data['name'];   ?>" alt="logo" height="250px">