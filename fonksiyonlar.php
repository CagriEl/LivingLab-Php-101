<?php

//Fonksiyonlar


//Belli sayıdaki verileri kullanıp bunları işleyerek bize sonuçlar üretir.


//GİRDİ ->fonksiyon -> çıktı

//Yerleşik Fonksiyonlar
    // Php kurulduğunda php içinde bulunan fonksiyonlardır.
//Metin Fonksiyonları
    // metinleri işleyen fonksiyonlardır.
//Sayı Fonksiyonları
    // sayısal sonuçlar veren fonksiyonlardır. Sayıları biçimlendirmek, sabitleri döndürmek, matematiksel hesaplamalar.
//Tarih Fonksiyonları
    // sunucu saati saat parametleri için kullanılır.
//Dizi Fonksiyonları
//dosya fonksiyonları
//veritabanı fonksiyonları - mysql değineceğiz.

//kullanıcı fonksiyonları

// Veri doğrulamalar
// Kullanıcı kimliklerini doğrulamalama
// veri ekleme vb.

// Fonksiyon Oluşturma Kuralları

//isimleri bir harf veya alt çizgi ile başlamalı ancak sayı ile başlayamaz.

//aynı olamaz yani ismi benzersiz olmalı

//isteğe parametre kabul edebilir ve değer döndürebilir..

// function selam(){
//     echo "Selam";
// }
// selam();


// function rakam(){
//     for($i=0;$i<10;$i++){
//         echo $i;
//     }
// }
// rakam();

//Fonskiyonlara parametre ekleme

// function topla($sayi1,$sayi2){
//     $sonuc = $sayi1 + $sayi2;
//     echo $sonuc;
// }
// topla(1,2);
//fonksiyon bitişi

//Parametrelere Varsayılan Değeler Verme

// function ders($ders_adi='PHP 101'){
//     echo 'Ders:'. " ".$ders_adi. " ".' Dersine Hoşgeldiniz';
// }
// ders('Başakşehir LivingLab');

//Return Değerleri

// tüm değerler echo komutu ile ekrana yazdırılmıştır. Fonksiyonlardan gelen sonucu yazdırmak yerine bir değişkene atayıp kullanabiliriz. Bunun için return komutunu kullanıyoruz.


// function carp($sayi1,$sayi2){
//     $sonuc = $sayi1 * $sayi2;
//     return $sonuc;
// }

// $hesaplama = carp(2,3);
// echo 'Fonksiyon ile çarpma işlemi yaptıktan sonraki değer: '.$hesaplama;

//Global Fonksiyon

//içinde tanımlanan değişkenler dışarı gönderilmez. Dışarda tanımlanan bir değişkende fonksyionlarda kullanılamaz.


// function ders(){
//     $ders_ismi = 'Php 101';
// }

// ders();
// echo $ders_ismi;


// $ders_adi = 'Php 101';
// function ders(){
//     global $ders_adi;
//     echo 'Derse Hoşgeldin. Ders adı:'." ".$ders_adi;
// }

// ders()


// Özyinelemeli Fonksiyonlar(recursive)

//bir koşul yerine getirilinceye kadar kendini tekrar çağıran fonksiyondur.

// function faktoriyel($sayi){
//     if($sayi == 0){
//         return 1;
//     }
//     else{
//         return $sayi * faktoriyel($sayi-1);
//     }
// }
// echo faktoriyel(5);


//Fonksiyon Referansları

//bir değişkene referansın değişken değerini atayabiliriz.


// $ogrenci_ad = 'Ömer';
// $ogrenci_ad2 = &$ogrenci_ad;

// // echo $ogrenci_ad;
// echo  "Selam"." ".$ogrenci_ad2 ;


//unset

// $ogrenci_ad = 'Ömer';
// $ogrenci_ad2 = &$ogrenci_ad;
// unset($ogrenci_ad);
// echo  "Selam"." ".$ogrenci_ad2 ;
?>
