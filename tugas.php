<?php

 echo "bangun datar: \n";
 echo "\n";

echo "1.persegi panjang \n2.segitiga \n3.lingkaran \n";
echo "\n";
echo "--------------------------------------------------\n";


echo "anda memilih =";
$pilih = trim (fgets(STDIN));
echo "\n";

$hasil;

switch($pilih){
  case "1":
    echo "lebar=";
    $lebar = trim (fgets(STDIN));
    echo "panjang=";
    $panjang =trim (fgets(STDIN));

    echo "lebar x panjang =\n";
    
    $hasil = $lebar * $panjang;
    echo "Luas persegi panjang = " . $hasil . "\n";
    break;
  
    case "2":
      // echo "luas=";
      // $luas = trim (fgets(STDIN));
      echo "alas=";
      $alas =trim (fgets(STDIN));
      echo "tinggi=";
      $tinggi =trim (fgets(STDIN));
      
      $hasil = 1/2 * $alas * $tinggi;
      echo "($alas x $tinggi) = hasil dari alas x tinggi dibagi 1/2 = $hasil (luas segitiga) \n" ;

      break;
      
    case "3":
      echo "jari =";
      $jari =trim (fgets(STDIN));
      // echo "phie";
      // $phie =trim (fgets(STDIN));
      $𝞹 = 22/7;

      $hasil = $𝞹*( $jari * $jari );

      echo "hasil hitungan alas lingkaran sebagai berikut \n";
      echo "jari-jari lingkaran = $jari \n";
      echo "𝞹 = $𝞹 \n";
      echo "Maka luas lingkaran sama dengan [ $𝞹 x $jari x $jari] = $hasil \n";
      

     
  }

?>