<?php



// $bolumler = array('Yazılım', 'Bilgisayar', 'Elektrik', 'Tıp', 'Resim', 'Müzik');

// echo $bolumler[5]; // index 0 dan sayılır.

// //eleman 1 den başlar


// $array=['Yazılım','Bilgisayar','Müzik'];
// foreach($array as $element){
//     echo $element;
//     echo '<br>';
// }



//İlişkili Diziler


//  $sinif_bilgiler = [
//      'Öğrenci Adı'=> "Çağrı",
//      'Öğrenci Soyadı' => "El",
//      'Öğrenci Numarası' => "21"
//  ];

// echo $sinif_bilgiler['Öğrenci Adı'];
// echo $sinif_bilgiler['Öğrenci Soyadı'];


// $sinif_bilgiler = [
//         'Öğrenci Adı'=> "Çağrı",
//         'Öğrenci Soyadı' => "El",
//         'Öğrenci Numarası' => "21"
//     ];

//     foreach($sinif_bilgiler as $key =>$value){
//         echo $key .":". $value;
//         echo '<br>';
//     }

//ÇOK BOYUTLU DİZİLER


$sinif_bilgiler = [
            'Öğrenci Adı'=> 'Çağrı',
            'Öğrenci Soyadı' => "El",
            'Öğrenci Numarası' => "21",
            'Veli Bilgileri' => ['Anne'=>'Ayşe', 'Baba'=> 'Mehmet'],
            'Hobiler'=>['Resim','Müzik','Kitap']
        ];

        echo $sinif_bilgiler['Veli Bilgileri']['Anne'];
        echo '<br>';
        echo $sinif_bilgiler['Hobiler'][2];


?>


