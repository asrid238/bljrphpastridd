<?php 
// array
// membuat array
$hari =array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$arr =[100,"teks", true];
// menampilkan array
//versi debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
//menampilkan 1 elemen pada array
echo $arr[0];
?>




<!DOCTYPE html>
<html>
<head>
    <title>latihan array</title>
    <style>
        .kotak{
            width: 30px ;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left; 
            transition:1s;
        }
        .kontak:hover {
           transform: rotate(360deg);
           border-radius: 50%; 
        }

    </style>
</head>
<body>



<?php
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]

];
?>


