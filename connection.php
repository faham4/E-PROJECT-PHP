<?php

$con=mysqli_connect("localhost","root","","tasting");

if(mysqli_connect_error()){
    echo"Cannot connect to data base";
    exit(); 
}
?>