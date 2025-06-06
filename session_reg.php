<?php
    session_start();
    if(isset($_SESSION['uname'])){
        header("Location:session_login.php");
    }
    $result="";
    if(isset($_POST['reg']) && $_POST['name'] && $_POST['uname'] && $_POST['pwd'])
    {
        $_SESSION['name']  = $_POST['name'];
        $_SESSION['uname'] = $_POST['uname'];
        $_SESSION['pwd']   = $_POST['pwd'];
        $result = "Account Created Success";
        header("refresh:2,url=session_login.php");
    }
    else if(isset($_POST['reg'])){        
        $result = "All Fields Are Required";
    }
?>
<center>
    <!-- <form action="<?php // echo $_SERVER['PHP_SELF'] ?>" method="post"> -->
    <form action="" method="post">
        <h3>Create New Account</h3>
        <p><input type="text" name="name" id="name" placeholder="Enter Your name"></p>
        <p><input type="text" name="uname"id="uname" placeholder="Enter Your uname"></p>
        <p><input type="text" name="pwd"  id="pwd" placeholder="Enter Your pwd"></p>
        <p><?php echo $result; ?></p>
        <p><input type="submit" value="Create Account" name="reg">  </p>
    </form>
</center>
