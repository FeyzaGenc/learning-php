<?php
$servername="localhost";
$username="root";
$password="";

try
{
    //bağlantı oluşturuldu
    $conn=new PDO("mysql:host=$servername",$username,$password);
    //pdo errmode exception olarak ayarlama
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="create database myDBPDO";
    //exec()kullandık geriye sonuç dönmediği için
    $conn->exec($sql);
    echo "database created successfully<br>";
}
catch (PDOException $e)
{
    echo $sql."<br>".$e->getMessage();
}
$conn=null;
?>