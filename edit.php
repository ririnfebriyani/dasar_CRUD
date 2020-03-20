<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Dasar CRUD</h2>
        <h4>Edit Data</h4>
        <a class="btn btn-primary mb-2" href="indexsuplier.php">Kembali</a>
        <?php
        $dEdit = $_GET['dEdit'];
        $ambil = $koneksi->query("SELECT * FROM tb_suplier WHERE id_suplier = '$dEdit'");
        $pecah = $ambil->fetch_assoc();
        ?>
        <form style="width:50%" class="mb-5" method="POST">
            <div class="form-group">
                <label>Nama Suplier</label>
                <input value="<?php echo $pecah['nama_suplier'] ?>" class="form-control" type="text" name="txtnama_suplier">
            </div>
            <div>
                <label>Alamat</label>
                <input value="<?php echo $pecah['alamat'] ?>" class="form-control" type="text" name="txt_alamat" id="">
            </div>
            <div class="form-group">
                <label>Telp</label>
                <input value="<?php echo $pecah['telp'] ?>" class="form-control" type="text" name="txt_telp" id="">
            </div>
            <button type="submit" class="btn btn-primary" name="edit" value="edit">edit</button>
        </form>
        <?php
        if (isset($_POST['edit'])) {

            echo $txtnama_suplier = $_POST['txtnama_suplier'];
            echo $txt_alamat = $_POST['txt_alamat'];
            echo $txt_telp = $_POST['txt_telp'];

            $koneksi->query("UPDATE tb_suplier SET nama_suplier = '$txtnama_suplier',
                                                   alamat       = '$txt_alamat',
                                                   telp         = '$txt_telp'
                                                   WHERE
                                                   id_suplier = '$dEdit'");
            echo "<script>
                alert('Data Berhasil Di Edit');
                window.location='indexsuplier.php';
                </script>";
        }
        ?>
    </div>
</body>

</html>