<?php

//DİZİLER

// Birden çok öğeyi tek bir değişkende tutmayı sağlar.

// a=>1
// b=>1

// anahtar-değer çiftleri yazılır.


//  $array_kirtasiye = array('Kalem', 'Silgi', 'Defter','Boya Kalemi');
//  echo $array_kirtasiye[0];
//  echo "<br/>";
//  echo $array_kirtasiye[1];
//  echo "<br/>";
//  echo $array_kirtasiye[2];
//  echo "<br/>";
//  echo $array_kirtasiye[3];


//  $array = ['Kalem', 'Silgi','Defter', 'Boya Kalemi'];
//     foreach($array as $element){
//         echo $element;
//         echo '<br>';
//     }

    //İlişkili (Associative) Diziler 


        // İlişkili dizi indexlenmiş dizilere benzeyen dizi anahtarları için
        // karakter dizisini kullanabileceğimiz dizi tipidir.


        // $personel_bilgileri = [
        //     'ad' => "Çağrı",
        //     'soyad'=> "EL",
        //     'email' => "cagri@localhost.com",
        // ];
        // echo $personel_bilgileri['ad'];
        // echo "<br>";
        // echo $personel_bilgileri['soyad'];
        // echo "<br>";
        // echo $personel_bilgileri['email'];


        //   $bilgiler = [
        //       'Ad' => "Çağrı",
        //       'Soyad'=> "EL",
        //       'Email' => "cagri@localhost.com",
        //   ];
        //   foreach ($bilgiler as $key => $value){
        //       echo $key . ":". $value;
        //       echo '<br>';
        //   }



        //Çok Boyutlu Diziler

//             $bilgiler = [   
//                 'Ad' => 'Çağrı',
//                 'Soyad'=> 'EL',
//                 'Email' => 'cagri@localhost.com', 
//                 'Hobiler' => ['Resim','Müzik','Kitap'],
//                 'Sosyal Medya'=>['Facebok' => 'cagriel', 'linkedin'=>'/in/cagriel']
//             ];

//             echo $bilgiler['Hobiler'][1];
//             echo '<br/>';
//             echo $bilgiler['Sosyal Medya']['linkedin'];


                //Diziler için yardımcı dizi işlevleri


                //COUNT

                // $sinif = ['Ahmet', 'Emre', 'Elif','Ecem','Elifnaz','Mehmet','Başakşehir Living Lab'];

                // echo count($sinif); //ekrana 7 yazar, elemanlar 1 den sayılmaya başlar.


                //is_array

                // $sinif = array('Ahmet', 'Emre', 'Elif','Ecem','Elifnaz','Mehmet','Başakşehir Living Lab');

                // if(is_array($sinif)){
                //    echo "Bu bir dizi";
                // }else{
                //     echo "bu bir dizi değil";
                // }

                //in_array // DİZİ İÇİNDEKİ ÖĞEYİ ARAŞTIRIR.
                
                // $sinif = array('Ahmet', 'AHMET', 'Emre', 'Elif','Ecem','Elifnaz','Mehmet','Başakşehir Living Lab');

                // if(in_array('AHMET',$sinif)){
                //     echo 'Evet, bu isim dizide mevcut';
                // }else{
                //     echo 'Hayır, burada böyle biri yok.';
                // }


                //explode // bir karakter dizisini birden fazla parçaya bölüp, dizi olarak döndürür

                    // $sinif = "Ahmet,Emre,Elif,Ecem";

                    // $array = explode(",",$sinif);
                    // echo '<pre>';
                    // print_r($array);

                   

                //implode // bir diziyi birleştirme karakteri ile karakter dizi oluşturur.


                // $dizi =['Ecem','Elif','Emre','Ahmet'];

                // $sinif = implode(",",$dizi);

                // echo $sinif;

                //array_push // dizinin sonuna yeni bir öğe eklemek için kullanılır.


                // $dizi  = ['Elif','Ecem','Ahmet','Emre'];
               
                // array_push($dizi, 'Nur');

                // echo '<pre>';
                // print_r($dizi);


                //array_pop // dizi sonundan bir eleman kaldırır.

                // $dizi  = ['Elif','Ecem','Ahmet','Emre'];

                // $kaldir = array_pop($dizi);

                // echo '<pre>';
                // print_r($dizi);
?>