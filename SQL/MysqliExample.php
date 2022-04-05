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
        $veritabanıBağlantısı=@mysqli_init();//mysqli sunucusunda yeni bir bağlantı açmak
        @mysqli_real_connect($veritabanıBağlantısı,"localhost","root","");//init metoduyla  açılan bağlantıya bağlantı bilgilerini atmak için kullanılır
        @mysqli_set_charset($veritabanıBağlantısı,"UTF8");

        if(mysqli_connect_errno($veritabanıBağlantısı))
        {
            echo "bağlantı hatası<br/>";
            echo "hata açıklaması:".mysqli_connect_error();
        }
        else{
            echo "bağlantı kuruldu";
            mysqli_select_db($veritabanıBağlantısı,"phplearning");
        }
        @mysqli_close($veritabanıBağlantısı);
        ?>
    </body>
</html>

