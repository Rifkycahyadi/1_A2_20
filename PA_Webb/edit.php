<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM makanan WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $nama_masakan = $_POST['nama_masakan'];
        $asal_daerah = $_POST['asal_daerah'];
        $resep = $_POST['resep'];

        $update = mysqli_query($db, "UPDATE makanan SET nama_masakan='$nama_masakan', asal_daerah='$asal_daerah', resep='$resep' WHERE id='$id'");

        if($update){
            header("Location:home.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NuKuliner</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Nusantara kuliner</h2>
    </header>
    
    <div class="form-class">
        <h3>Edit Masakan</h3>
        <form action="" method="post">
            
            <label for="">Nama Masakan</label><br>
            <input type="text" name="nama_masakan" class="form-text" value=<?=$row['nama_masakan'];?>><br>
            
            <label for="">Asal Daerah</label><br>
            <input type="text" name="asal_daerah" class="form-text" value=<?=$row['asal_daerah'];?>><br>
            
            <label for="">Resep</label><br>
            <input type="text" name="resep" class="form-text" value=<?=$row['resep'];?>><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>