<!-- 

OOP Nedir?


Object Oriented Programming (NESNE YÖNELİMLİ PROGRAMLAMA)

UML
MVC -> Model View Controller
HMVC
MVVM

Belli bir düzende, geliştirilebilir bir yapı kazandırmak için kullanılan TEKNİKTİR. -->



<!-- dbname = pdo_db

sunucu = localhost

parola =  -->

<?php 

  $mysqlsunucu = "localhost";
  $mysqlkullanici = "root";
  $mysqlparola ="";
try{
  $connection = new PDO("mysql:host=$mysqlsunucu;dbname=pdo_db;charset=utf8",$mysqlkullanici,$mysqlparola);
  $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
  echo "Bağlantı hatası".$e->getMessage();
}


$sorgu = $connection->query("SELECT * FROM ogrenciler", PDO::FETCH_ASSOC);

if($sorgu->rowCount()){
  foreach($sorgu as $row){
    echo $row["id"]. " ". $row["ad"]. " ". $row["soyad"];
  }
}
else{
  echo "Kayıt Yok";
}

$connection = null;


?>