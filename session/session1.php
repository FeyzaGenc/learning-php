<?php
session_start();
?>

<html>
    <body>
        <?php
        $_SESSION["user"]="Saching";//kullanıcı bilgisi atandı
        echo "session information are set successfully.<br/>";
        ?>
        <a href="session2.php">Visit next page</a> <!--href bağlantının URL ini belirtir. -->
    </body>
</html>
