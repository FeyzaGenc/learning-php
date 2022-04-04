<?php
$myfile=fopen("webdictionary.txt","r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));//açılan dosyadan okuma
echo fgets($myfile);//tek satır okuma

while(!feof($myfile))//dosyanın sonuna gelip gelinmediğini kontrol eder
{
    echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>