<?php
namespace Technical_Portal; 
class jp{
}
echo jp::class;

define("message","hello",false);
echo message,"</br>"; 

const MESSAGE="Hello const by JavaTpoint PHP";  
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
    echo 'The fun name is:'.__FUNCTION__."<br>";
}
test();

function test_fun()
{
    echo 'Hie';
}
test_fun();

echo"<h3>Example for__CLASS__</h3>";

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
$t=new JTP;
$t->getClassName();

class base 
{
    function test_first()
    {
        echo __CLASS__;
    }
}

class child extends base 
{
    public function __construct()
    {
        ;
    }
}
$t=new child;
$t->test_first();

echo "<h3>Trait</h3>";

trait created_trait{
    function jtp()
    {
        echo __TRAIT__;
    }
}

class Company
{
    use created_trait;
}
$a=new Company;
$a->jtp();

echo "<h3>Method<h3>";
class method{
    public function __construct()
    {
        echo __METHOD__."<br><br>";
    }

    public function met_fun()
    {
        echo __METHOD__;
    }
}
$a=new method;
$a->met_fun();
 
?>
