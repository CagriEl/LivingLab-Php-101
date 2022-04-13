<?php

    // while
    // do while
    // for
    // foreach


        //while 
    //  Döngüde olan koşul ifadesinin DOĞRU sonuç verdiği sürece
    //  {
    //      süslü parantez içindeki kısım calişmaya devam eder.  
    //      Eğer döngü ifadesi başlangıçta hatalıysa çalışmaz.   
    //  }

        //  $deger = 1;
        //      while ($deger <= 10){
        //          echo $deger++ ." "; 
        //      }
        //      echo "<br/>";
        //  $deger = 1;
        //  while ($deger <=10):
        //      echo $deger ++. " ";
        //  endwhile;

        // $say = 1;
        // while($say <=50):
        //     echo "sayımız => $say<br/>";
        //     $say++;
        // endwhile;

        // $i = 1;
        // while ($i <=6){
        //     echo "$i. Başlık";
        //     $i++;
        // }

    //     do while
    //  while döngüsüne koşul doğruluğunu BAŞLANGIÇTA kontrol eder
    //  do while döngüsüne koşul doğruluğunu SONDA kontrol eder

        //  $deger = 5 ;
        //  do {
        //      echo $deger++ . " ";

        //  }while ($deger <= 100);

        // $sayi = 1;
        // do{
        //     echo $sayi."^2 =". $sayi**2 ." ";
        //     echo "<br>";
        //     $sayi++;
        // }while($sayi <=1000);


        // for döngüsü

        // for($deger=1; $deger<=100; $deger++ ){
        //     echo   $deger . " ";
        // }

        // for($i=1; $i<=100; $i++){
        //     $tekrakam = $i % 2; //2'ye tam bölünmezse tek sayıdır.
        //     if($tekrakam!=0){
        //         echo $i."<br/>";
        //     }

        // }

        // foreach Döngüsü
    
        // Diziler üzerinde tekrarlı işlemler için kullanılır
        
        // $geneltanimlama = array("a" =>8, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
        //     //   foreach(array (1,2,3,4,5) as $deger){
        //     //       echo $deger;
        
        //     //   echo "<br />"
        //     //   foreach ($geneltanimlama as $deger){
        //     //       echo $deger . " ";
        
        //     //   echo "<br/><br/>";
        //     foreach ($geneltanimlama as $deger_adi => $deger){
        //          echo "Değer Adı: $deger_adi  Değer: $deger <br/>";
        //      }
?>