<?php
//bağlantı oluşturma
$conn=new mysqli("localhost","root","","phplearning");
//bağlantı kontrolü
if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}

$stmt=$conn->prepare("INSERT INTO MyGuests(firstname,lastname,email) VALUES(?,?,?)");//tamsayı, dize, çift veya blob değeriyle değiştirmek istediğimiz yerlere Sql'imizde bir soru işareti ekliyoruz (?)
$stmt->bind_param("sss",$firstname,$lastname,$email);//Bu fonksiyon parametreleri SQL sorgusuna bağlar ve veritabanına parametrelerin ne olduğunu söyler. sss parametrelerin string olduğunu söyler

$firstname="john";
$lastname="doe";
$email="john@example";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute(); 

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "new records created successfully";

$stmt->close();
$conn->close();
?>