<?php
$season=array("summer","winter","spring","autumn");//indexed array
echo "season are: $season[0],$season[1],$season[2],$season[3]"."<br>";

$season[0]="summer";//indexed array
$season[1]="winter";
$season[2]="spring";
$season[3]="autumn";
echo "season are: $season[0],$season[1],$season[2],$season[3]"."<br><br>";

$salary=array("sono"=>"350000","john"=>"450000","kartik"=>"200000");
foreach($salary as $k=>$v)//associative array
{
    echo "key: ".$k." value: ".$v."<br/>";
}

echo "<br>";
$salary["sono"]="350000";//associative array
$salary["john"]="450000";
$salary["kartik"]="200000";
echo "sono salary:".$salary["sono"]."<br/>";
echo "john salary:".$salary["john"]."<br/>";
echo "kartik salary:".$salary["kartik"]."<br/><br>";

$size=array("big","medium","short");//indexed
echo "$size[0],$size[1],$size[2]"."<br><br>";

$size=array("big","medium","short");//indexed
foreach($size as $s)
{
    echo "size is:$s <br/>";
}
echo "<br>";
echo "eleman sayısı:";
echo count($size);//count fonksiyonu array içinde kaç eleman bulunduğunu yazdırır
echo "<br><br>";

$emp=array
(
    array(1,"sono",400000),
    array(2,"john",500000),
    array(3,"rahul",300000)
);

for($row=0;$row<3;$row++)
{
    for($col=0;$col<3;$col++)
    {
        echo $emp[$row][$col]." ";
    }
    echo "<br/>";
}

$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");    
print_r(array_change_key_case($salary,CASE_LOWER)); //elemanları küçük harflerle yazar, CASE_UPPER büyük harflerle yazar
print_r(array_chunk($salary,2))//bu fonksiyon diziyi parçalara böler

$name1=array("sonoo","john","vivek","smith");    
$name2=array("umesh","sonoo","kartik","smith");    
$name3=array_intersect($name1,$name2);
foreach($name3 as $n)
{
    echo "$n<br/>";
}
?>