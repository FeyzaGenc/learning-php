<?php   
    $season=array("summer","winter","spring","autumn");//indexed array içinedki elemanlar foreach kullanılarak yazdırıldı
    foreach($season as $arr)
    {
        echo "season is:$arr<br/><br>";
    }

    $employee=array("Name"=>"Alex","Email"=>"alex_jtp@gmail.com","Age"=>21,"Gender=>male");//associative array içindeki elemnlar foreach kullanılarak yazdırıldı
    foreach($employee as $key=>$element)
    {
        echo $key.":".$element;
        echo "</br>";
    }

    
?>