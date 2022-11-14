<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusantara kuliner</title>
    <link rel="stylesheet" href="style_.css">
</head>
<body>
    <center>
        <header>
            <h1>Masakan Nusantara</h1>
        </header>
        <div class="form-class">
            <h3>Resep Masakan</h3>
            <form action="" method="post" enctype="multipart/form-data">

                <label for="">Cara Membuat</label><br>
                <textarea cols="100" rows="20" name="bikin" class="form-text"></textarea><br>

                <input type="submit" name="submit" value="Kirim" class="btn-submit">
            
            </form>
        </div>
    </center>
</body>
</html>

<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $buat = $_POST['bikin'];

    if(isset($_POST['submit'])){
        $query = "INSERT INTO resep (buat) VALUES ('$buat')";
        $result = $db->query($query);

        if($result){
            header("Location:home.php");
        }else{
            echo "gagal kirim";
        }
    }
}
?> 
