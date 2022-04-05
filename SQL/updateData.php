<?php
$conn=new mysqli("localhost","root","","phplearning");
if($conn->connect_error)
{
    die("connecting failed:".$conn->connect_error);
}
$sql="UPDATE MyGuests SET lastname='Doe' WHERE id =7"; //id si 7 olan kaydın soyadını doe olarak günceller

if($conn->query($sql)==TRUE)
{
    echo "record updated successfully";
}
else
{
    echo "error updating record:".$conn->error;
}
$conn->close();
?>