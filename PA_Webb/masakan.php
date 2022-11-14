<?php 
    require 'config.php';

    date_default_timezone_set("Asia/Makassar");

    $result = mysqli_query($db, "SELECT * FROM makanan");
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
            <table border=1>
                <tr class="thead">
                    <th>No</th>
                    <th>Nama Masakan</th>
                    <th>Asal Daerah</th>
                    <th>Resep</th>
                    <th>Tanggal Ditambahkan</th>
                    <th>Gambar</th>
                    
                </tr>

                <?php 
                    $i = 1;
                    while($row = mysqli_fetch_array($result)){

                ?>

                <tr class ="hasil">    
                    <td><?=$i;?></td>
                    <td nowrap><?=$row['nama_masakan']?></td>
                    <td><?=$row['asal_daerah']?></td>
                    <td>
                        <a href="resep_makanan.php?id=<?=$row['id'];?>">
                            Resep <?=$row['nama_masakan']?>
                        </a>
                    </td>
                    <td><?=$row['tanggal_tambah']?></td>
                    <td><img src="gambar/<?=$row['gambar']?>" alt="" width="100px"></td>
                </tr>
                <?php
                    $i++; 
                        }
                ?>

            </table>
        </div>
    </center>
</body>
</html>