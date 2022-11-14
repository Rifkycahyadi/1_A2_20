<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusantara kuliner</title>
    <link rel="stylesheet" href="style_home.css">
</head>
<body>
    <center>
        <header>
            <h2>Masakan Nusantara</h2>
        </header>

        <p>Tanggal Sekarang :  <?=date("d-m-Y")?></p><br>
        
        <div class="form-class">
            <h3>Tambah Masakan</h3>
            <form action="" method="post" enctype="multipart/form-data">

                <label for="">Nama Masakan</label><br>
                <input type="text" name="nama_masakan" class="form-text"><br>
                
                <label for="">Asal Daerah</label><br>
                <input type="text" name="asal_daerah" class="form-text"><br>
                
                <label for="">Resep</label><br>
                <!-- <input type="text" name="resep" class="form-text"><br> -->
                <textarea cols="40" rows="5" name="resep" class="form-text"></textarea><br>

                <label for="">Tanggal menambahkan : </label><br>
                <input type="date" name="tanggal_tambah"><br><br>

                <label for="">Foto Masakan</label><br>
                <input type="file" name="gambar"><br><br>
                
                <input type="submit" name="submit" value="Kirim" class="btn-submit">
            
            </form>
        </div>
    </center>
</body>
</html>

<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $nama_masakan = $_POST['nama_masakan'];
    $asal_daerah = $_POST['asal_daerah'];
    $resep = $_POST['resep'];
    $tanggal_tambah = $_POST['tanggal_tambah'];

    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));

    $gambar_baru = "$nama_masakan $asal_daerah.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if(move_uploaded_file($tmp, 'gambar/'.$gambar_baru)){
        $query = "INSERT INTO makanan (nama_masakan, asal_daerah, resep, tanggal_tambah, gambar) VALUES ('$nama_masakan','$asal_daerah','$resep','$tanggal_tambah','$gambar_baru')";
        $result = $db->query($query);

        if($result){
            header("Location:home.php");
        }else{
            echo "gagal kirim";
        }
    }
}
?> 

