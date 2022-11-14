<?php 
    require 'config.php';

    date_default_timezone_set("Asia/Makassar");

    $result = mysqli_query($db, "SELECT * FROM resep");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_.css">
    <title>NuKuliner</title>
</head>
<body>
    <center>
    <header>
        <h1>Masakan Nusantara</h1>
    </header>
    <div class="list-table">
            <h3>Resep Masakan Nusantara</h3>
            <?php 
                    
                    while($row = mysqli_fetch_array($result)){

                ?>
                <p><?=$row['bahan2']?></p>
                <p><?=$row['buat']?></p>
                <?php
                    }
                        
                ?>

        </div>
    </center>
</body>
</html>