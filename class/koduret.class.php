<?php
class koduret{
	private $uzunluk;
	private $arr1 = array(); //Rakamlar için dizi
	private $arr2 = array(); //Küçük harfler için dizi
	private $arr3 = array(); //Büyük harfler için dizi
	
	function __construct(){
		//Dizi elemanlarını yükle
		$this->arr1 = range(0,9);
		$this->arr2 = range('a','z');
		$this->arr3 = range('A','Z');
		//Dizileri karıştır
		shuffle($this->arr1);
		shuffle($this->arr2);
		shuffle($this->arr3);
	}
	
	function karmakod($kharfuzunluk=2,$bharfuzunluk=2,$sayiuzunluk=4){
		$karakterler = array(); // Boş bir dizi oluşturuyoruz
		$uzunluk = $kharfuzunluk + $bharfuzunluk + $sayiuzunluk;
		$karakterler = array_merge(array_slice($this->arr1,0,$sayiuzunluk),array_slice($this->arr2,0,$kharfuzunluk),array_slice($this->arr3,0,$bharfuzunluk));
		srand((float)microtime()*100000);
		shuffle($karakterler); // Dizideki elemanları rasgele sıralatıyoruz

		$sonuc = ''; // Boş bir sonuc değişkeni oluşturuyoruz

		for($i=0; $i<$uzunluk; $i++){
			$sonuc .= $karakterler[$i]; // karakterleri birleştiriyoruz
		}
		unset($karakterler); // Tanımlanmamış hale getiriyoruz
		return $sonuc; // Çıkan sonucu geri dödürüyoruz
	}
	
	function kod($uzunluk = 8){
		$karakterler = array(); // Boş bir dizi oluşturuyoruz
		$karakterler = array_merge($this->arr1,$this->arr2,$this->arr3);
		srand((float)microtime()*100000);
		shuffle($karakterler); // Dizideki elemanları rasgele sıralatıyoruz

		$sonuc = ''; // Boş bir sonuc değişkeni oluşturuyoruz

		for($i=0; $i<$uzunluk; $i++){
			$sonuc .= $karakterler[$i]; // Karakterleri birleştiriyoruz
		}
		unset($karakterler); // Tanımlanmamış hale getiriyoruz
		return $sonuc; // Çıkan sonucu geri dödürüyoruz
	}
	
	function siralikod($sira_string,$uzunluklar){
		//$sira_string => BKSKSB gibi -> B:Büyük Harf, K:Küçük harf, S:Sayı
		//$uzunluklar => array();
	}
	
	function sifre_uret($uzunluk){
		
	}
	
	function sifre_gonder($eposta, $eposta_aciklama = "Sistem tarafından belirlenen şifreniz aşağıdadır." , $sifre_label = "Şifreniz: "){
		
	}
}
?>
