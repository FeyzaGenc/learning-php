<!--nesne tabanlı örnek-->
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
        $veritabanıBağlantısı=mysqli_init();
        $veritabanıBağlantısı->real_connect("localhost","root","",);

        if($veritabanıBağlantısı->connect_errno)
        {
            echo "bağlantı hatası<br/>";
            echo "hata açıklaması:".$veritabanıBağlantısı->connect_error;
        }
        else{
            echo "bağlantı kuruldu";
        }

        $veritabanıBağlantısı->close();
        ?>
    </body>
</html>

