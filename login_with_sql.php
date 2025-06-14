<?php
    $conn = mysqli_connect("localhost","root","","trading");
    session_start();
    error_reporting(0);
    $result="";
    if(isset($_POST['login']) && $_POST['uname'] && $_POST['pwd']){
        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];
        $query = "SELECT * FROM `users` WHERE `uname`='$uname'";
        $run = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($run);
        if($_POST['uname']===$data['uname']){
            if($_POST['uname']===$data['uname'] && $_POST['pwd']===$data['pwd']){
                $_SESSION['uname'] = $data['uname'];
                $_SESSION['name'] = $data['name'];
                $_SESSION['user_id'] = $data['id'];
                header("Location:index.php");
            }
            else{
                $result = "Enter Valid Password";
            }
        }
        else{
            $result = "User Not Exist";
        }
    }
    else if(isset($_POST['login'])){
        $result = "All Fields Are Required";
    }
?>

<center>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">    
        <h3>Login Account</h3>        
        <p><input type="text" name="uname"id="uname" placeholder="Enter Your uname"></p>
        <p><input type="password" name="pwd"  id="pwd" placeholder="Enter Your pwd"></p>
        <p><?php echo $result; ?></p>
        <p><input type="submit" value="Login" name="login">  </p>
    </form>
</center>
