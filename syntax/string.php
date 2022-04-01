<?php
$city='delhi';
//demo ile yazdırma 
$str=<<<Demo
my name is misthi and i live in $city.
Demo;//heredoc
echo $str;
echo "</br>";
//farklı bir demo örneği
$str2=<<<Demo
it is the example of multiple lines of text.
Demo;
echo $str2;
echo '</br>';
//echo ile direkt yazdırma
echo <<<Demo
it is the example of multiple lines of text.
Demo;
echo '</br>';

class heredocExample{
    var $demo;
    var $example;
    function __construct()//kurucu metodla ilk değerleri
    {
        $this->demo='DEMO';
        $this->example=array('ex 1','ex 2','ex 3');
    }
}
$heredocExample=new heredocExample();//heredoc example sınıfından bir nesne oluşturduk
$name='gunjan';

echo <<<ECO
my name is "$name". I am printing some $heredocExample->demo example.<br/>
now, i am printing {$heredocExample->example[1]}.<br/>
it will print a capital 'A':\x41
ECO;//oluşturulan nesne ile sınıf içindeki değişkenlere ulaştık ve değişkene atılan dizi içindeki ikinci elemanı yazdırdık ve demo değişkeni içindeki değeri yazdırdık
?>