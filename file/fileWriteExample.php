<?php
$myfile=fopen("newfile.txt","w") or die("unable to open file");//yazma modunda dosya açılır
$txt="langıdı lan lan";
fwrite($myfile,$txt);//dosyaya yazma 
$myfile=fopen("newfile.txt","a") or die("unable to open file");//ekleme modunda dosya açılır
$txt="gümbüdü güm bam";
fwrite($myfile,$txt);//eklenilenleri dosyaya yazma
fclose($myfile);
?>