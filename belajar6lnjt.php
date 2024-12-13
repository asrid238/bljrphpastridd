<?php 
  echo date ("L");
   echo date ("d");
   echo date ("M");
   echo date ("L,d-M");

   // Time
   // UNIX Timestamp /EPOCH time
   // detik yang sudah berlalu sejak 1 januari 1978
   
   
   //echo time();
    //echo date("L", time()+60*60*24*100);




   // mktime
   //membuat sendiri detik
   //mktime(0,0,0,0,0,0)
   //jam,menit,detik,bulan,tanggal,tahun
   //echo date("l", mktime(0,0,0,0,8,25,1985));


   //srtotime
  // echo date("l", strtotime("25 augt 1985")) ;

?>

  
<?php
function salam($nama) {
  return "Selamat Datang,$nama!";

}




?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>belajar function</title>
</head>
<body>
  <h1><?= salam("astrid"); ?></h1>
</body>
</html>
