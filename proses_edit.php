<?php
$id = $_POST['id'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $role = $_POST['role'];
 $password = $_POST['password'];
 $database = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
 $query = $database->query("UPDATE `tb_user` SET id='$id' username='$username',password='$asal' WHERE id='$id'");

 if($query){
    header("Location:index.php");
 }