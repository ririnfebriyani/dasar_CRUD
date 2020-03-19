<?php
$koneksi = mysqli_connect('localhost', 'root', '', "db_dasar_mysql");
if ($koneksi) {
    echo "Terkoneksi";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tugas</title>
</head>

<body>
    <div class="container">
        <h2>Tambah Data</h2>
        <a href="indexsuplier.php" class="btn btn-primary mb-5">Kembali</a>
        <form action="proses_tambah.php" method="POST" style="width: 50%">
            <form>
                <div class="form-group">
                    <label>Nama </label>
                    <input name="txt_nama" type="text" class="form-control">

                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input name="txt_alamat" type="text" class="form-control">
                </div>
                <div class=" form-group">
                    <label>Telp</label>
                    <input name="txt_telp" type="text" class="form-control">
                </div>

                <button type=" submit" class="btn btn-success">SIMPAN</button>
            </form>
        </form>


    </div>
</body>

</html>