<?php
 $mahasiswa = [
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
echo $mahasiswa [0] ["nama"];
 ?>
<!DOCTYPE html>
<html>
<head>

    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama :<?php echo $mhs["nama"]; ?></li>
        <li>NRP :<?php echo $mhs["nrp"]; ?></li>
        <li>Email :<?php echo $mhs["email"]; ?></li>
        <li>Jurusan :<?php echo $mhs["jurusan"]; ?></li>

    </ul>
<?php endforeach; ?>
</body>
</html>
