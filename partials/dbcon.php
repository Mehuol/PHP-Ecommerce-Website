<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "customstore";

$connect = mysqli_connect($host,$user,$password,$dbname);

if($connect -> connect_error){
    die("Connection failed: ". mysqli_connect_errno());
}else{
    // echo "we are connected";
}

?>