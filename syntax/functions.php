<?php
function adder(&$str2)
    {
        $str2.='call by reference';
    }
    $str='hello ';
    adder($str);
    echo $str;
    echo "</br>";

    function add($x,$y)
    {
        $sum=$x+$y;
        echo "toplam=$sum <br><br>";
    }
    function sub($x,$y)
    {
        $sub=$x-$y;
        echo "fark=$sub <br><br>";
    }
    if(isset($_POST['add']))
    {
        add($_POST['first'],$_POST['second']);
    }
    if(isset($_POST['sub']))
    {
        sub($_POST['first'],$_POST['second']);
    }

    function increment($i)  
    {  
    $i++;  
    }  
    $i = 44;  
    increment($i);  
    echo $i;  

    function display($number)
    {
        if($number<=5)
        {
            echo "<br> $number <br/>";
            display($number+1);
        }
    }
    display(1);//1den başlar

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
<form method="post">
    Birinci sayıyı giriniz:<input type="number" name="first"/>
    <br><br>
    İkinci sayıyı giriniz:<input type="number"name="second"/><br><br>
    <input type="submit" name="add" value="TOPLAM"/>
    <input type="submit"name="sub"value="FARK"/>
</form>