
<?php
/* 
NOT NULL - Her satır o sütun için bir değer içermelidir, boş değerlere izin verilmez
DEFAULT value - Başka bir değer verilmediğinde varsayılan değeri ayarlama
UNSIGNED - Sayı türleri için kullanılır, depolanan verileri pozitif sayılarla ve sıfırla sınırlar
AUTO INCREMENT -  MySQL, her yeni kayıt eklendiğinde alanın değerini otomatik olarak 1 artırır
PRIMARY KEY - Tablodaki satırları benzersiz olarak tanımlamak için kullanılır. BİRİNCİL ANAHTAR ayarına sahip sütun genellikle bir kimlik numarasıdır ve genellikle AUTO_İNCREMENT ile kullanılır
*/
$conn=new mysqli("localhost","root","","phplearning");
if($conn->connect_errno)
{
    die("connection failed:".$conn->connect_error);
}

$sql="CREATE TABLE MyGuests(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if($conn->query($sql)==TRUE)
{
    echo "Table MyGuests created successfully";
}
else
{
    echo "Error creating table:".$conn->error;
}
$conn->close();
?>