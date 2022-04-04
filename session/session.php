<?php
session_start();//oturumu başlatma
if(!isset($_SESSION['counter']))
{
    $_SESSION['counter'] = 1;
}

echo("page views:".$_SESSION['counter']);//sayfa görüntülendiyse yazdırır
?>