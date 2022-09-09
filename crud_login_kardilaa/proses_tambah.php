<?php
$username = $_POST['nama'];
$role = $_POST['asal'];

$database = new PDO("mysql:host=localhost; dbname=rumahsakit", "root", "");
$query = $database->query("insert into tb_user values('','$username','$role')");

if($query){
    header("Location:index.php");
 }