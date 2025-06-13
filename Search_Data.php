<form action="" method="GET">
    <input type="text" name="term" id="search" class="form-control my-1">
    <input type="submit" value="Search" id="Search">
</form>

<?php
    error_reporting(0);
    $conn = mysqli_connect("localhost", "root", "", "trading");
    $search = $_GET['term'];
    $sql = "SELECT * FROM `users` WHERE `name` LIKE '%". $search ."%'";
    $result = mysqli_query($conn, $sql);
    $matches="";
    if ($_GET['term']) {
        if (mysqli_num_rows($result) > 0) {
            while ($rows = mysqli_fetch_assoc($result)) {
                $matches = $rows['name'];
            }
        } else {
            $matches = "Records Not Found";
        }
    }
?>
<a href="#">
    <?php echo print_r($matches) ?>
</a>