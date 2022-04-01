<?php

define("message","hello",false);//bu fonksiyonda büyük küçük harfe duyarlı değil false olduğu için
echo message,"</br>"; 

const MESSAGE="Hello const by JavaTpoint PHP";  //const sabit kalacak ifadeler için tanımlamada kullanılır
echo MESSAGE;

echo"<h3>Example for_LINE_</h3>";
echo "you are at line number".__LINE__."<br><br>";

echo "<h3>Example for_FILE_</h3>";//dosyanın depolandığı yol
echo __FILE__."<br><br>";

echo "<h3>Example for_DIR_</h3>";//dosyanın tam dizin yolu
echo __DIR__."<br><br>";
echo dirname(__FILE__)."<br><br>";

echo "<h3>Example for _FUNCTION_<h3/>";
function test(){
    echo 'The fun name is:'.__FUNCTION__."<br>";//fonksiyon ismi için
}
test();

echo"<h3>Example for__CLASS__</h3>";

//sınıf ismi yazdırmak için örnek
class JTP
{
    public function __construct() 
    {
        ;
    }
    function getClassName()
    {
        echo __CLASS__."<br><br>";
    }
}
$t=new JTP;//JTP sınıfından bir nesne oluşturduk
$t->getClassName();//oluşturulan nesneyle sınıf içindeki fonksiyona ulaşarak sınıf ismini yazar

class base 
{
    function test_first()
    {
        echo __CLASS__;
    }
}

class child extends base //child sınıfı base sınıfından miras alır
{
    public function __construct()
    {
        ;
    }
}
$t=new child;//yeni nesne
$t->test_first();//sınıf ismini yazar(child)

echo "<h3>Trait</h3>";

trait created_trait{
    function jtp()
    {
        echo __TRAIT__;//trait adını döndürür
    }
}

class Company
{
    use created_trait;//miras alma gibi traitin özelliklerini kullanabiliyor
}
$a=new Company;
$a->jtp();

echo "<h3>Method<h3>";
class method{
    public function __construct()
    {
        echo __METHOD__."<br><br>";
    }

    public function method_function()
    {
        echo __METHOD__;//method adını yazdırır
    }
}
$a=new method;
$a->method_function();
 
$bikes=array("r","y","k");
var_dump($bikes);//veri tipini döndürür
echo $bikes[0], $bikes[1],$bikes[2];
echo "</br>";

?>
