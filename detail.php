<?php
$id_detail = $_GET['dDetail'];
include 'conn.php';


$no = 1;
$query = $koneksi->query("SELECT * FROM `tb_suplier` WHERE id_suplier = '$id_detail'");
$data = $query->fetch_assoc();
?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tugas</title>
    <a href="indexsuplier.php" class="btn btn-primary"> Kembali</a>
</head>
<div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id Suplier</th>
                    <th scope="col">Nama Supier</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telp</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['id_suplier'] ?></td>
                    <td><?php echo $data['nama_suplier'] ?></td>
                    <td><?php echo $data['alamat'] ?></td>
                    <td><?php echo $data['telp'] ?></td>

                </tr>
                <?php

                ?>
            </tbody>
        </table>
    </div>
</div>