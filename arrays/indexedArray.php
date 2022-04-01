<?php
$season=array("summer","winter","spring","autumn");//indexed array 1. atama yöntemi
echo "season are: $season[0],$season[1],$season[2],$season[3]"."<br>";

$season[0]="summer";//indexed array 2. atama yöntemi
$season[1]="winter";
$season[2]="spring";
$season[3]="autumn";
echo "season are: $season[0],$season[1],$season[2],$season[3]"."<br><br>";

//2. örnek
$size=array("big","medium","short");//indexed
echo "$size[0],$size[1],$size[2]"."<br><br>";

foreach($size as $s)//indexed array foreach döngüsü ile yazdırma
{
    echo "size is:$s <br/>";
}

echo "<br>";
echo "eleman sayısı:";
echo count($size);//count fonksiyonu array içinde kaç eleman bulunduğunu yazdırır
echo "<br><br>";
?>
