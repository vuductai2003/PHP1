<?php
$hostname="localhost";
$db_name="user_341";
$usename="root";
$password="";
// Dụng đối tượng POO
try{
    $connect= new PDO("mysql:host=$hostname;dbname=$db_name",$usename,$password);
    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công";
}
catch(PDOException $e){
    $e->getMessage();
}