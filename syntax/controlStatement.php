<?php   
    $season=array("summer","winter","spring","autumn");
    foreach($season as $arr)
    {
        echo "season is:$arr<br/><br>";
    }

    $employee=array("Name"=>"Alex","Email"=>"alex_jtp@gmail.com","Age"=>21,"Gender=>male");
    foreach($employee as $key=>$element)
    {
        echo $key.":".$element;
        echo "</br>";
    }
?>