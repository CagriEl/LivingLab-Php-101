<?php

    //Mantıksal Operatörler
    //   && - and(ve)
    //   || - or (veya - yada)
    //   ! (değilse)
    // if (eğer parantez koşunu sağlanırsa){

    //     //iki parantez arası true dönerse
    //     // bu kısım çalışır
    // }    

    // //false dönerse bu kısımdaki kodlar calişir.

        //doğru koşul
        // $a = 23;
        // $b = 23;

    // if($a == $b){
    //     echo "a b'ye eşit";
    // }else{ //değilse parantez içindeki koşul yanlış ise
    //     echo "hayır a sayısı b sayısına eşit değil";
    // }
    // //yanlış koşul
    // $a = 23;
    // $b = 24;

    // if($a == $b){
    //     echo "a b'ye eşit";
    // }else{ //değilse parantez içindeki koşul yanlış ise
    //     echo "hayır a sayısı b sayısına eşit değil";
    // }

    //     //ve operatörü (&&) doğru çalışması
    //  $a = 21;
    //  $b = 21;
    //  $c= "cagri";
    //  $d= "cagri";

    //  if($a == $b && $c == $d){
    //      echo "tüm koşullar doğru";
    //  }

    //  //ve operatörü (&&) yanliş çalışması
    //  $a = 21;
    //  $b = 23; //b değişkeni koşula uymuyor.
    //  $c= "cagri";
    //  $d= "cagri";

    //  if($a == $b && $c == $d){
    //      echo "tüm koşullar doğru";
    //  }else{
    //      echo "bir ya da birden fazla koşulda uyumsuzluk var";
    //  }


    //or || (veya - yada) operatörü

    // $a = 6;
    // $b = 6;
    // $c = "Ahmet";
    // $d = "Emre";
    // $e = "Harun";
    // $f = "Mert";


    // if(($a == $b) ||  ($c == $d) || ($e == $f)){
    //     echo "Girilen koşulların en az bir tanesi doğru";
    // }

    //! değilse operatörü

    // $icerik1 = "Gül";  
    // $icerik2 = "gül";
    
    // if($icerik1 != $icerik2){
    //      echo "bu içerikler aynı değil";
    //  }else{
    //      echo "bu; içerik aynı";
    //  }

    //  $not = 50; //notum 5
    //  if($not < 50){ //eğer notum 50 den küçükse dersi geçemediğimi ekrana yaz
    //      echo "dersi gecemedin";
    //  }elseif($not>50 && $not<75){ //notum 55 ti ama ben bunun yerine notum 50 den büyük ve 70 ten küçükse ekrana ortalama bir öğrenci olduğumu yaz
    //      echo "ortalama bir öğrencisin";
    //  }else{ //başarılı bir öğrenci olduğumu yaz
    //      echo "başarılısın";
    //  }

    //  $username = "Çağrı";
    //  $password = "123456";
     
    //  if($username == "Çağrı" && $password != "123456"){
    //      echo "şifren yanliş";
    //  }elseif($username != "Çağrı" && $password == "123456"){
    //      echo "kullanıcı adın yanliş";
    //  }elseif($username != "Çağrı" && $password != "123456"){
    //      echo "her iki veri de yanliş";
    //  }else{
    //      echo "aferim sonunda tüm bilgiler başarılı gir bakalım sisteme";
    //  }
?>