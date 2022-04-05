<?php
$servername="localhost";
$username="username";
$password="password";
 
//bağlantı oluşturma
$conn=new mysqli($servername,$username,$password);

//bağlantı kontrolü
if($conn->connect_error)
{
    die("Connection failed:".$conn->connect_error);
}
echo "connected successfully";

//database oluşturma
$sql="create_database_myDB";
if($conn->query($sql)==true)
{
    echo "database created successfully";
}
else
{
    echo "error creating database".$conn->error;
}
$conn->close();//bağlantıyı kapatma
?>