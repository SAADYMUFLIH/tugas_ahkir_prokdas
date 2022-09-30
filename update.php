<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-1">
        <header>ONE LIPUTAN</header>
        <ul>
            <li><a href="dashboard.php">Beranda</a></li>
            <li><a href="update.php">Berita Update</a></li>
        </ul>
    </div>

    <div class="container-2">
        <h1>DATA ONE LIPUTAN</h1>
        <h3><a href="tambah_update.html">CREATE</a></h3>
        <table border="2" cellpadding="10" cellspacing="0">
            <tr class="judul">
                <th>Nomer</th>
                <th>Gambar</th>
                <th>Berita</th>
                <th>Tempat Kejadian</th>
                <th>Tanggal Kejadian</th>
                <th>Tanggal Update</th>
                <th>Action</th>
            </tr>
            <tr>
                <?php
                    $sql="SELECT * FROM berita_update";
                    $query= mysqli_query($connect, $sql);
                    while($pel=mysqli_fetch_array($query)){
                        echo"
                            <tr>
                                <td>$pel[nomer]</td>
                                <td>$pel[gambar]</td>
                                <td>$pel[berita]</td>
                                <td>$pel[tempat_kejadian]</td>
                                <td>$pel[tanggal_kejadian]</td>
                                <td>$pel[tanggal_update]</td>
                                <td>
                                <a href='form-edit-update.php?nomer=".$pel['nomer']."'><button class='merah'>Edit</button></a>
                                <a href='delete-update.php?nomer=".$pel['nomer']."'><button class='hijau'>Hapus</button></a>
                                </td>
                            </tr>";
                    };
                ?>
            </tr>
        </table>

    </div>
</body>
</html>