<?php
    //1.connect to mysql database
    $host ="localhost";
    $db_username ="root";
    $db_password ="";
    $db_name = "simple_db";
    $con = mysqli_connect($host, $db_username, $db_pass , $db_name)
     or die("EROR" . mysqli_eror($con));
     

?>
