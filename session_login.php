<?php
    session_start();
    if(isset($_SESSION['token'])){
        header("Location:session_dashboard.php");
    }
    $result="";
    if(isset($_POST['login']) && $_POST['uname'] && $_POST['pwd'])
    {        
        if($_POST['uname']==$_SESSION['uname'] && $_SESSION['pwd']===$_POST['pwd']){
            $token = substr(str_shuffle("QWERTYUIOPASDFGHJKKLKZXCVBNMM"),0,12);
            $_SESSION['token'] = $token;
            $result = "Account Login Success";
            header("refresh:2,url=session_dashboard.php");
        }
        else{
            $result = "Enter Valid Credentials";            
        }
    }
    else if(isset($_POST['login'])){
        $result = "All Fields Are Required";
    }
?>

<center>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">    
        <h3>Login Account</h3>        
        <p><input type="text" name="uname"id="uname" placeholder="Enter Your uname"></p>
        <p><input type="text" name="pwd"  id="pwd" placeholder="Enter Your pwd"></p>
        <p><?php echo $result; ?></p>
        <p><input type="submit" value="Login" name="login">  </p>
    </form>
</center>
