<?php
$conn=new mysqli("localhost","root","","phplearning");
if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}

$sql="SELECT id,firstname,lastname FROM MyGuests WHERE lastname ='doe'";//soyismi doe olan kayıtları sorgular
$result=$conn->query($sql);//sonucu result değişkenne atar

if($result->num_rows>0)//birden fazla kayıt varsa 
{
    while($row=$result->fetch_assoc())//kayıtları her satır için yazdırır
    {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
}
else
{
    echo "0 results";
} 
$conn->close();
?>