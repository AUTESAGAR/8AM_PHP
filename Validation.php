<?php
    $r="";
    if(isset($_POST['login']) && $_POST['pwd']){
        $password = $_POST['pwd'];
        $pwd_pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/';
        if (preg_match($pwd_pattern, $password)) {
            $r = "Valid Password";
        } else {
            $r = "Password Must Be One Lowercase,Uppercase,Number,length 8 Character  Ex.Pass@123";
        }
    }
    else if(isset($_POST['login'])){
        $r = "All Fields are Required";
    }
?>

<form action="" method="post">
    <p><input type="text" name="pwd" id="pwd" placeholder="Enter pwd"></p>
    <p><?php echo $r; ?></p>
    <p><input type="submit" value="Login" name="login"></p>
</form>
