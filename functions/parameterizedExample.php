<?php
function add($x,$y)//toplama fonksiyonu
    {
        $sum=$x+$y;
        echo "toplam=$sum <br><br>";
    }
    function sub($x,$y)//çıkarma fonksiyonu
    {
        $sub=$x-$y;
        echo "fark=$sub <br><br>";
    }
    if(isset($_POST['add']))//tanımlıysa
    {
        add($_POST['first'],$_POST['second']);
    }
    if(isset($_POST['sub']))
    {
        sub($_POST['first'],$_POST['second']);
    }
?>
<form method="post">
    Birinci sayıyı giriniz:<input type="number" name="first"/>
    <br><br>
    İkinci sayıyı giriniz:<input type="number"name="second"/><br><br>
    <input type="submit" name="add" value="TOPLAM"/>
    <input type="submit"name="sub"value="FARK"/>
</form>