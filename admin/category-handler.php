<?php
include("../partials/dbcon.php");

$category = $_POST['name'];

$sql = "INSERT INTO categories(name) VALUES('$category')";

$connect->query($sql);

?>