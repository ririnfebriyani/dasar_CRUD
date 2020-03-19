<?php
$txt_nama = $_POST['txt_nama'];
$txt_alamat = $_POST['txt_alamat'];
$txt_telp = $_POST['txt_telp'];

include 'conn.php';

$koneksi->query("INSERT INTO `tb_suplier`(`nama_suplier`,
                                        `alamat`,
                                        `telp`)
                                            VALUES (
                                                '$txt_nama',
                                                '$txt_alamat',
                                                '$txt_telp'
                                                )");

//header('location:indexsuplier.php');
echo "<script>
alert('Data Tersimpan');
window.location='indexsuplier.php';
</script>";
