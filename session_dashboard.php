<?php
    session_start();
    if(!isset($_SESSION['token'])){
        header("Location:session_login.php");
    }

    if(isset($_POST['logout'])){
        unset($_SESSION['token']);
        header("Location:session_login.php");
    }
    echo "Welcome : ". $_SESSION['name'];
?>

<form action="" method="post">
    <input type="submit" value="logout" name="logout">
</form>