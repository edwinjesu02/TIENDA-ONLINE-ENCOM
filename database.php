<?php
 $server= "localhost";
 $username="root";
 $password="";
 $database="datos usuarios";
 

 try{
    $conn=new PDO("mysql:host=$server;dbname=$database;" ,$username,$password);
 } catch (PDOException $e) {
    die("Connect Failed: ".$e->getMessage());
 }
?>