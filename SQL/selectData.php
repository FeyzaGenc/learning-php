<?php
$conn=new mysqli("localhost","root","","phplearning");
if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
$sql="SELECT id,firstname,lastname FROM MyGuests ";
$result=$conn->query($sql);//sql sorgusunnun sonucu result değişkenine atıldı
if($result->num_rows>0)
{
    //her satır için çıktı verir
    while($row=$result->fetch_assoc())
    {
        echo "id".$row["id"]. "- Name ".$row["firstname"]. " ".$row["lastname"]."<br>";
    }

} 
else
{
   echo "0 results";     
}
$conn->close();
?>