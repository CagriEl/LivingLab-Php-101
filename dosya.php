<?php


    //Dosya İşlemleri


    //readFile Fonksiyonu

        //Dosyanın içini okur, belleğe kaydeder. İhtiyaç olduğunda da dosyayı kullanmamıza olanak sağlar.


    // $dosya_icerik = readFile('dosya.txt');
    // echo $dosya_icerik;


    //fOpen Fonksiyonu


    //readFile() fonksiyonu ile aynı işi yapar.
    //readFile'da tek bir işlem yapılırken fOpen fonksiyonu ile birden fazla işlem yaptırılabilir.


    //2 parametre almaktadır.
    //1. parametresi acılacak dosya, 2. parametresi hangi formatta acılacağı

    // $dosya_icerik = fopen("dosya.txt", "r") or die ("Dosya Bulunamadı");
    // echo fread($dosya_icerik, filesize("dosya.txt"));
    // fclose($dosya_icerik);

    //     // r: Salt okunur dosyaları açmak için kullanılır.
    //     // w:  Yazılması bir dosya açar. Dosyanın içeriğini siler.
    //     // a: Yazmak bir dosya açar, ama w parametresinin aksine dosyadaki verileri korur.
    //     // x: Yalnızca yazmak için bir dosya oluşturur.
    //     // r+: okuma /yazma bir dosya açar
    //     // w+: okuma /yazma bir dosya açar ve dosyanın içeriğini siler
    //     // a+: okuma /yazma bir dosya açar ve dosya içeriğini korur
    //     // x+: okuma /yazma bir dosya oluştur. dosya varsa false ya da bir hata döndürür.



    

    // fClose Fonksiyonu 

    // Açık olan bir dosyayı kapatmak için kullanılır. 

    // $dosya_icerik = fopen("dosya.txt", "r");

    // fclose($dosya_icerik);


    //fGet Fonksyionu (Tek Satır Okuma Fonk.)

    // dosyanın ilk satırını okumak için kullanılır.

    // $dosya = fopen("dosya.txt","r");
    // $satir_oku = fgets($dosya);
    // echo $satir_oku;
    // fclose($dosya);

    // feof Fonksiyonu (Satır Sonu Fonksiyonu)

    // Bir dosyanın satırın en sonuna ulaşıp ulaşmadığını kontrol etmek içn kullanılır.


    // $dosya = fopen("dosya.txt", "r") or die ("Dosya yok");

    // while(!feof($dosya)){
    //     echo fgets($dosya). "<br>";

    // }
    // fclose($dosya);

    // FGETC fonksiyonu // harf harf okuma

    // $dosya = fopen('dosya.txt','r');
    // while($dosya = fgetc($dosya)){
    //     echo $dosya.'<br>';

    // }
    // fclose($dosya);


    // fopen ile dosya oluşturma

    // $dosya_olustur = fopen("ders.txt", "w");

    //Dosyanın üzerine yazma

    //içeriğini silip dosya üzerine yazmak istiyor "w", içeriği koruyup yazmak istiyorsak "a" parametresi kullanılmalıdır.

        // $dosya = fopen("ders.txt", "a");
        // fwrite ($dosya, 'ahmet');
        // fwrite ($dosya, 've ali');
        // fwrite ($dosya, 'güneş');
        // fclose($dosya);




?>