<?php
//=============================//
  //> Author   : Ahmad sopyan
  //> Email    : ahmadsofian63@gmil.com
  //> Telpon   : 089635550381
  //> Github   : https://github.com/ahmadsopyan9
  //> Facebook : https://www.facebook.com/ahmadsopyan99
//=============================//

function Convert($angka) 
{ 
  $get_data = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"); 
  if ($angka < 12) 
    return " " . $get_data[$angka]; 
  elseif ($angka < 20) 
    return Convert($angka - 10) . "belas"; 
  elseif ($angka < 100) 
    return Convert($angka / 10) . " puluh" . Convert($angka % 10); 
  elseif ($angka < 200) 
    return " seratus" . Convert($angka - 100); 
  elseif ($angka < 1000) 
    return Convert($angka / 100) . " ratus" . Convert($angka % 100); 
  elseif ($angka < 2000) 
    return " seribu" . Convert($angka - 1000); 
  elseif ($angka < 1000000) 
    return Convert($angka / 1000) . " ribu" . Convert($angka % 1000); 
  elseif ($angka < 1000000000) 
    return Convert($angka / 1000000) . " juta" . Convert($angka % 1000000); 
} 