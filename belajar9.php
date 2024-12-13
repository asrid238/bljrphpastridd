<?php
// variable Scope / lingkup variabel
$x = 10;

function tampilx() {
    $x = 20;
    echo $x;
}

tampilx();
echo "<br>";
echo $x;
?>


<?php
//SUPERGLOBALS
// variabel global milik php
//merupakan array associative


//$_GET
$_GET["nama"] = "Astrid octavian syah";
$_GET["nrp"]  ="09867788";
var_dump($_GET);



?>




<?php 
 $GET= [
    [
"nama" => "Astrid octavian syah",
"nrp"  => "0974783788",
"jurusan" => "Rekayasa perangkat lunal",
"email" => "astridd123gmail.com"

    ],
    [
"nama" => "Akmal ardiansyah",
"nrp"  => "67878889",
"jurusan" => "teknik industri",
"email" => "akmaludinn@gmail.com"
    ],

 ];


?>
!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ( $GET as $GET) : ?>  
        <li>
            <a href="latihan2.php?nama=<?= $GET ["nama"] ;
             ?> &nrp=<?=$GET["nrp"];?>&emai=<?= $GET["email"];?>
    </li>
        <?php endforeach ; ?>
    </ul>
</body>
</html>
