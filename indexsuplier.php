<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tugas</title>
</head>

<body>
    <div class="container">
        <h2>Data Suplier</h2>
        <a href="tambah.php" class="btn btn-primary"> Tambah Data</a>

        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id Suplier</th>
                    <th scope="col">Nama Supier</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telp</th>
                    <th scope="col">Aksi</th>

                </tr>

            </thead>

            <?php
            $no = 1;
            $ambil = $koneksi->query("SELECT * from tb_suplier");
            while ($suplier = $ambil->fetch_assoc()) {

            ?>
                <tbody>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $suplier['id_suplier'] ?></td>
                        <td><?php echo $suplier['nama_suplier'] ?></td>
                        <td><?php echo $suplier['alamat'] ?></td>
                        <td><?php echo $suplier['telp'] ?></td>
                        <td>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>

                    </tr>
                <?php } ?>
                </tbody>


        </table>
    </div>
</body>

</html>