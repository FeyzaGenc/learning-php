<?php
$emp=array
(
    array(1,"sono",400000),
    array(2,"john",500000),
    array(3,"rahul",300000)
);//3e 3 dizi oluşturuldu.

for($row=0;$row<3;$row++)//for döngüsü ile dizi yazdırıldı
{
    for($col=0;$col<3;$col++)
    {
        echo $emp[$row][$col]." ";
    }
    echo "<br/>";
}

//2. yöntemle dizi oluşturuldu
$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");    
print_r(array_change_key_case($salary,CASE_LOWER)); //elemanları küçük harflerle yazar, CASE_UPPER büyük harflerle yazar
print_r(array_chunk($salary,2))//bu fonksiyon diziyi parçalara böler.burada 2 ye bölündü
?>