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
    //son eklenen ID numarasını döndürür
    $last_id=$conn->insert_id;
    echo "new record created succesfully. Last inserted ID is:".$last_id;
}
else
{
    echo "error:".$sql."<br>".$conn->error;
}
$conn->close();
?>