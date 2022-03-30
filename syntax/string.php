<?php
$city='delhi';
$str=<<<Demo
my name is misthi and i live in $city.
Demo;//heredoc
echo $str;
echo "</br>";

$str2=<<<Demo
it is the example of multiple lines of text.
Demo;
echo $str2;
echo '</br>';

echo <<<Demo
it is the example of multiple lines of text.
Demo;
echo '</br>';

class heredocExample{
    var $demo;
    var $example;
    function __construct()
    {
        $this->demo='DEMO';
        $this->example=array('ex 1','ex 2','ex 3');
    }
}
$heredocExample=new heredocExample();
$name='gunjan';

echo <<<ECO
my name is "$name". I am printing some $heredocExample->demo example.<br/>
now, i am printing {$heredocExample->example[1]}.<br/>
it will print a capital 'A':\x41
ECO;
?>