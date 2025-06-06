<?php
    // $pro_name = "Oppo Mobile";
    // setcookie("pro_name",$pro_name,time()+600,"/index.php");
    // header("Location:Get_Cookies.php");
    // setcookie("search","$search",$secure=false,time()-0);
?>

<?php
  function abc($a)
  {
    setcookie('Product',$a,time()+60,'https');
  }
  echo $_COOKIE['Product'];
?>
<?php 
    abc('Samsung')
?>
<?php 
// abc('Realme') 
?>
<?php 
  // abc('Oppo');
?>
<?php 
// abc('Apple') 
?>
<?php 
  // abc('Carbon') 
?>
