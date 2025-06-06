<?php
    // $data = ['Samir','BCS',9856253260,'Shivajinagar'];
    
    // for($i=0;$i<4;$i++){
    //     echo $data[$i];
    // }
    
    // $data = [
    //     ['Samir','BCS',9856253260,'Shivajinagar'],        
    // ];
    // echo $data[0][0];
    // echo $data[0][1];
    
    // $data = [
    //     ['Samir','BCS',9856253260,'Shivajinagar'],
    //     ['Kiran','BCA',7856253265,'Bajajnagar'],
    // ];    
    // echo $data[1][0];
    
    echo $_COOKIE['pro_name'];

    $data = [
        array("Name"=>'Samir',"Edu"=>'BCS',"Mob"=>9856253260,"email"=>"vit@gmail.com"),
        array("Name"=>'Kiran',"Edu"=>'BA',"Mob"=>7856253268,"email"=>"vit@gmail.com"),
        array("Name"=>'Shital',"Edu"=>'BCA',"Mob"=>87856253265,"email"=>"vit@gmail.com"),
        array("Name"=>'Shital',"Edu"=>'BCA',"Mob"=>8785625326,"email"=>"vit@gmail.com")
    ];    
    for($i=0;$i<4;$i++){
        echo $data[$i]['Name'];
        echo $data[$i]['Edu'];
        echo $data[$i]['Mob'];
    }
?>