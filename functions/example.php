<?php
//sayıyı artırma
    function increment($i)  
    {  
    $i++;  
    }  
    $i = 44;  
    increment($i);  
    echo $i;  

//1 den başlayarak 5e kadar yazdırma
    function display($number)
    {
        if($number<=5)
        {
            echo "<br> $number <br/>";
            display($number+1);
        }
    }
    display(1);//1den başlar

//faktöriyel örneği
    function fac($n)
    {
        if($n<0)
        return -1;
        if($n==0)
        return 1;
        return($n*fac($n-1));
    }
    echo fac(5);//5 faktöriyeli hesaplar
?>