<?php    
    session_start();
    // session_destroy();
    unset($_SESSION['user_id']);
    header("Location:login_with_sql.php");
?>