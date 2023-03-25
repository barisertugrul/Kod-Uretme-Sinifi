# Rastgele Kod Üretme Sınıfı
Özel rastgele kod üretme sınıfı
Fonksiyonlarına parametreler göndererek belli uzunlukta büyük harf, küçük farf ve sayılar içeren restgele kodlar oluşturmaya yarayan sınıf.

* Önce sınıf dosyası php sayfa içerisine dahil edilir
```include ('class/koduret.class.php');```
* Daha sonra yeni sınıf tanımlanır
`$koduret = new koduret;`

Örnekler:
* `echo "Varsayılan Karma: ".$koduret->karmakod();` //Varsayılan 8 karakter uzunluğunda 2 küçük, 2 büyük harf ve 4 sayı içeren yapı
* `echo "<br/>Parametreli Karma: ".$koduret->karmakod(3,4,6);` //Kullanılacak küçük, büyük harf ve sayı miktarının belirlendiği sorgulama
* `echo "<br/>Rasgele Kod (Varsayılan Uzunluk = 8): ".$koduret->kod();` //Varsayılan uzunluklu (8 karakter) tamamen rastgele kod yapısı
* `echo "<br/>Rasgele Kod (Tanımlanan Uzunluk = 12): ".$koduret->kod(12);` //12 karakter uzunluğundaki bir kodu üretmek için kullanılan yapı
