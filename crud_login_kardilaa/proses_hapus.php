<?php
$id = $_GET['id'];


$database = new PDO("mysql:host=localhost; dbname=rumahsakit", "root", "");
$query = $database->query("DELETE FROM `tb_user` WHERE id = '$id'");
if($query){
    header("Location:index.php");
 }