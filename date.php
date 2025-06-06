<?php
    echo date("d/m/y")."<br><br>";
    // Print Date in Digit Format
    echo date("D/M/Y")."<br><br>";    
    // Print Date in String Format
    date_default_timezone_set("Canada/Pacific");
    // Set Current Location Time Zone
    echo date("h:i:s")."<br><br>";	      // 12th Hr Watch
    echo date("H:i:s")."<br><br>"; 	     // 24th Hr Watch
    echo date("D-M-Y h:i:s A")."<br><br>"; // AM PM
?>