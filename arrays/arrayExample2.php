<?php
$name1=array("sonoo","john","vivek","smith");
$name2=array("umesh","sonoo","kartik","smith");    
$name3=array_intersect($name1,$name2);// bu fonkisyon iki dizinin kesişimini döndürür
foreach($name3 as $n)//array içindeki kesişim elemanlarını yazdırır
{
    echo "$n<br/>";
}
?>