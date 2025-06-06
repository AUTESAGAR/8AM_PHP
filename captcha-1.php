<?php 
    $text ="QWERTYUIOPASDFGHJKKLKZXCVBNMM";
    $r = str_shuffle($text);
    $captcha = substr($r,0,6);
    echo $captcha;
?>