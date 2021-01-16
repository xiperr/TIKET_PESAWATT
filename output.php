<?php
$nampes=$_POST['nama_pemesan'];
$jumtik=$_POST['jumlah_tiket'];
$kelas=$_POST['kelas'];
$tujuan=$_POST['tujuan'];
$bagasi=$_POST['bagasi'];
$asu=$_POST['asu']?implode(",",$_POST['asu']):"Tidak ada asuransi";



if ($kelas == "EKONOMI"){
    $harga = 1000000;
    $class = "Ekonomi (Air Mineral)";
}else if( $kelas == "BISNIS"){
    $harga = 2000000;
    $class = "Bisnis (Snack)";
}else{
    $harga = 3000000;
    $class = "Eksekutif (Makan)";
}

if($jumtik >= 3){
    $diskon = $harga*30/100;
    // $diskon=(($harga*30)/100);
}else{
    $diskon = 0;
}

if($bagasi == 5){
    $harbag=100000;
}elseif($bagasi == 10){
    $harbag=150000;
}else{
    $harbag=200000;
}

if($asu == "Asuransi Jiwa"){
    $asuransi = "Asuransi Jiwa";
    $hargaasu=50000;
}elseif($asu == "Asuransi Kecelakaan"){
    $asuransi ="Asuransi Kecelakaan";
    $hargaasu=50000;
}else{
    $asuransi = "Asuransi Keterlambatan";
    $hargaasu=50000;
}
    
$hartot = $harga*$jumtik-$diskon+$harbag+$hargaasu;

// foreach($_POST['asu'] as $value){
//     echo $value.",";
// }

//kelas dan fasilitas
// if($kelas == "EKONOMI"){
//     $harga = 1000000;
//     echo "Ekonomi (Air mineral)";

// }elseif($kelas == "BISNIS"){
//     $harga = 2000000;
//     echo "Bisnis (Snack)";

// }else($kelas == "EKSEKUTIF"){
//     $harga = 3000000;
//     echo "Eksekutif (Makan)";
// }

// //diskon
// if($jumtik >= 3){
//     $diskon=(($harga*30)/100);
// }elseif($jumtik <= 3){
//     $diskon=$harga;
// }

// //bagasi dan hartot

// if($bagasi=="5"){
//     $harbag=100000;
// }elseif($bagasi=="10"){
//     $harbag=150000;
// }else($bagasi=="15"){
//     $harbag=200000;
// }

// //asuransi
// if($asu=="Asuransi Jiwa"){
//     echo'Asuransi Jiwa';
//     $hargaasu=50000;
// }elseif($asu=="Asuransi Kecelakaan"){
//     echo'Asuransi Kecelakaan';
//     $hargaasu=50000;
// }else($asu=="Asuransi Keterlambatan"){
//     echo'Asuransi Keterlambatan';
//     $hargaasu=50000;
// }

// $hartot=$harga*$jumtik-$diskon+$harbag+$hargaasu;

?>


<!-- <table border="1">
<tr>
<th>Nama Pemesan</th><th>:</th><th><?= $nampes;?></th>
</tr>
<tr>
<td>Jumlah Tiket</td><td>:</td><td><?= $jumtik;?></td>
</tr>
<tr>
<td>Kelas</td><td>:</td><td><?= $class;?></td>
</tr>
<tr>
<td>Tujuan</td><td>:</td><td><?= $tujuan;?></td>
</tr>
<tr>
<td>Bagasi</td><td>:</td><td><?= $bagasi;?></td>
</tr>
<tr>
<td>Asuransi</td><td>:</td>
<td><?php foreach ($_POST['asu'] as $a) { ?><?= $a . ",";?><?php } ?></td>
</tr>
<tr>
<td>Total Harga</td><td>:</td><td><?= $hartot;?></td>
</tr>
</table> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIHAT DATA</title>

     <!-- CSS BOOSTRAP -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1 class="mt-4">***Data pemesanan Tiket***</h1>
    <table class="table table-dark table-sm">
        <tr>
            <th>Nama Pemesan</th><th>:</th><th><?= $nampes;?></th>
        </tr>
        <tr>
            <td>Jumlah Tiket</td><td>:</td><td><?= $jumtik;?></td>
        </tr>
        <tr>
            <td>Kelas</td><td>:</td><td><?= $class;?></td>
        </tr>
        <tr>
            <td>Tujuan</td><td>:</td><td><?= $tujuan;?></td>
        </tr>
        <tr>
            <td>Bagasi</td><td>:</td><td><?= $bagasi;?></td>
        </tr>
        <tr>
            <td>Asuransi</td><td>:</td>
        <td><?php foreach ($_POST['asu'] as $a) { ?><?= $a . ",";?><?php } ?></td>
        </tr>
        <tr>
            <td>Total Harga</td><td>:</td><td><?= $hartot;?></td>
        </tr>
    </table>
    <a href="pemesanan.php" class="btn btn-success" type="reset">Kembali</a>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
