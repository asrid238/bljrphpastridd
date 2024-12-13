<?php
//array
//variabel yang dapat memliki banyak nilai
//elemen pada array boleh memiliki tipe data yang berbeda
//pasangan antara key dan value
//ke-nya adalah index,yang di mulai dari 0


//membuat array
//cara lama
// $hari = array ("Senin", "Selasa","rabu") ;
// //cara baru
// $bulan = ["januari","februari","Maret"] ;
// $arrl = [123,"tulisan", false];

// //menampilkan array
// //var_dump() /print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// //menampilan 1 elemen pada array
// echo $arrl[0];
// echo "<br>";
// echo $bulan[1]

//menambahkan elemen baru pada array

?>


<?php
//pengulangan pada array
// for / foreach
$angka = [3,2,15,20,11,77,89];
?>

<!DOCTYPE html>
<html>
<head>
    <title>latihan 2</title>
    <style>
       .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align:center;
            line-height: 50px;
            margin: 3px;
            float:left;


        }
    </style>


</head>
<body>

  <?php for ( $i= 0;$i <count($angka); $i++ ) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

<div class="clear"></div>



<div class="clear"></div>

<?php foreach( $angka as $a) :?>
    <div class="kotak"><?=  $a;?></div>
    <?php endforeach; ?>





</body>
</html>





