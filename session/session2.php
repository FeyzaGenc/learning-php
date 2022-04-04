<?php
session_start();
?>
<html>
    <body>
        <?php
        echo "user is:".$_SESSION["user"];//kullanıcı ismini yazdırır
        ?>
    </body>
</html>