<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="uname">
    <input type="password" name="pwd">
    <input type="submit" value="submit">
</form>

<?php
    echo $_REQUEST['uname'];
    echo $_REQUEST['pwd'];
?>