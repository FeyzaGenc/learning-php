<?php
session_start();
if(!isset($_SESSION['counter']))
{
    $_SESSION['counter'] = 1;
}
echo("page views:".$_SESSION['counter']);
?>