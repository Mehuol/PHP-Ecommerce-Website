<?php
include("../partials/dbcon.php");

$email=$_POST['email'];
$msg=$_POST['msg'];

$sql = "INSERT INTO contact(email,msg) VALUES('$email','$msg')";

$connect->query($sql);

?>