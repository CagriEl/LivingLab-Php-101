 <?php

// class Ogrenciler {

//    public $ad;
//    private $soyad;

//    public function __construct($gelenad, $gelensoyad) {
//      $this->ad = $gelenad;
//      $this->soyad = $gelensoyad;
//    }

//    function adSoyad(){
//      return $this->ad . " " . $this->soyad;
//    }


//  }


// $ogrenci = new Ogrenciler("Ömer", "Dursun");

// echo $ogrenci->adSoyad();



// Erişim belirleyiciler


// public

// protected

// private

// -----------------------------------


// public -> her yerden ulaşabilir

// protected -> sınıf içinden ve kalıtım ile türetilen sınıflar içinden ulaşılabilir

// private -> sadece sınıf içinden ulaşılabilir.


// ------------------------


// Kurucu ve yıkıcılar


// __construct -> Kurucu -> yapı kurucu 


// _destruct -> yıkıcı > bu metotla dosyanın kapatılması sağlanır. 


// -----------------------------

// Değişkenler tanımlanır. Değişken içine bir değer atanırsa o değer hep geçerli kalır.

// $a = 5; 

// OOP Sabitler 

// const -> sabitler tanımlanır.

// cont pi = 3,14;


// self  -->

//  class Ogrenciler {

//      const Adı_Soyadı = "Ömer Dursun";
//      public function kisiadiyaz() {
//          echo self::Adı_Soyadı; // sabite erişim
//      }

//  }

// $kisi = new Ogrenciler();
// echo $kisi->kisiadiyaz();



// OOP Kalıtım

// Nesneye ait public veya protected özellik ve/veya metotların başka bir nesne tarafından devrealınmasıdır.



// Soyutlama (abstract)


// Kesinlikle olmazsa olmaz. Nesneleri modellemek soyu sınıflardan faydalanılır.


// Özelllikler ve metotlar olabilir. Özellikler ve metotlar erişim belirleyicilere sahip olabilir.
// abstract class Ogrenciler {

//     abstract public function kisiadiyaz();

// }



?>