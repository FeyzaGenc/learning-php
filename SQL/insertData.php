<?php
//bağlantı kurma
$conn=new mysqli("localhost","root","","phplearning");
//bağlantı kontrolü
if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
//kayıt ekleme myguest tablosuna
$sql="INSERT INTO MyGuests(firstname,lastname,email)
VALUES('John','Doe','john@example.com')";


if($conn->query($sql)==TRUE)
{
    echo "new record created succesfully";
}
else 
{
    echo "error:".$sql."<br>".$conn->error;
}
$conn->close();
?>