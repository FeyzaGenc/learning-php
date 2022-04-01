<?php
function adder(&$str2)//stringin başına $str ekleyerek yazdırır
    {
        $str2.='call by reference';
    }
    $str='hello ';
    adder($str);
    echo $str;
    echo "</br>";
?>