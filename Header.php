<?php
    $result="";
    if(isset($_POST['submit']) && $_POST['name'] && $_POST['mobile']) {
        // header("Location:https://www.google.com");
        // header("Location:index.php");
        $result ="reg Success";
        header("refresh:2,url=index.php");
    }
    else if(isset($_POST['submit'])){
        $result ="All Fields Are Required";
    }
?>

<form action="" method="post">
    <input type="text" name="name" id="" placeholder="Enter Your name">
    <input type="text" name="mobile" id="" placeholder="Enter Your mobile">
    <input type="submit" value="Submit" name="submit">
    <p><?php echo $result; ?></p>
</form>
