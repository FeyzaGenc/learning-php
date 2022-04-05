<?php
$servername ="localhost";
$username ="root";
$password ="";
//bağlantı oluşturma
$conn=mysqli_connect($servername,$username,$password);
//bağlantıyı kontrol etme
if(!$conn) 
{ 
    die("connect failed:".mysqli_connect_error());
}
//database oluşturma
$sql="Create database myDB";
if(mysqli_query($conn,$sql))
{
    echo "Database created successfully";
}
else
{
    echo "error creating database:".mysqli_error($conn);
}
mysqli_close($conn);
?>
