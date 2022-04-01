<?php
//key:$k value:$v şeklinde yazdırma 
$salary=array("sono"=>"350000","john"=>"450000","kartik"=>"200000");
foreach($salary as $k=>$v)//associative array (=> sembolü kullanarak adı ve etiketi ilişkilendirmemizi sağlar.)
{
    echo "key: ".$k." value: ".$v."<br/>";
}
echo "<br>";

//associative arrayi farklı şekilde tanımlama
$salary["sono"]="350000";//associative array 
$salary["john"]="450000";
$salary["kartik"]="200000";
echo "sono salary:".$salary["sono"]."<br/>";
echo "john salary:".$salary["john"]."<br/>";
echo "kartik salary:".$salary["kartik"]."<br/><br>";
?>