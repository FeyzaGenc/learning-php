<!DOCTYPE html>
<html lang="tr-TR">
    <head> 
        <meta http-equiv="Content-Type" content="text/html"; charset=UTF-8>
        <meta http-equiv="Content-Language" content="tr">
        <meta charset="UTF-8">
        <title>Php Learning</title>
    </head>

    <body>
        <?php  
        $veritabanıBağlantısı=mysqli_connect("localhost","root","","phpLearning");
        mysqli_set_charset($veritabanıBağlantısı,"UTF-8");//açılan mySql bağlantısına vaarsayılan istemci karakter setinin atanması
        if(mysqli_connect_errno($veritabanıBağlantısı))//hata kodu varsa bulduğu değeri geri döndürür
        {
            echo "veri tabanına bağlanılamadı";
        }
        else{
            echo "veri tabanına bağlanıldı";
        }
        mysqli_close($veritabanıBağlantısı);
        ?>
    </body>
</html>

