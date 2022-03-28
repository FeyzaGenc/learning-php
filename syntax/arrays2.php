<?php
$season=array("summer","winter","spring","autumn");
sort($season);//dizideki elemanların tümünü yazdırır
foreach($season as $s)
{
    echo "$s<br/>";
}

$key=array_search("spring",$season);//arama başarılıysa dizideki değeri döndürür
echo $key;
?>