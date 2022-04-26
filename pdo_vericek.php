<?php

$sorgu = $connection->query("SELECT * FROM ogrenciler", PDO::FETCH_ASSOC);

if($sorgu->rowCount()){
  foreach($sorgu as $row){
    echo $row["ogrenci_adi"]."<br>";
  }
}
else{
  echo "Kayıt Yok";
}
?>