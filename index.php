<?php
include ('class/koduret.class.php');
$koduret = new koduret;
echo "Varsayılan Karma: ".$koduret->karmakod();
echo "<br/>Parametreli Karma: ".$koduret->karmakod(3,4,6);
echo "<br/>Rasgele Kod (Varsayılan Uzunluk = 8): ".$koduret->kod();
echo "<br/>Rasgele Kod (Tanımlanan Uzunluk = 12): ".$koduret->kod(12);
?>
