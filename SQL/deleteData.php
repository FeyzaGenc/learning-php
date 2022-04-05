<?php
$conn=new mysqli("localhost","root","","phplearning");
if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
$sql="DELETE FROM MyGuests WHERE id=3";//id si 3 olan kaydı veri tabanından siler

if($conn->query($sql)==TRUE)
{
    echo "record deleted successfully";
}
else
{
    echo "error deleting record: ".$conn->error;
}
$conn->close();
?>