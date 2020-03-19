<?php
$id_hapus = $_GET['dHapus'];
include 'conn.php';

$koneksi->query("DELETE FROM `tb_suplier` WHERE id_suplier = '$id_hapus'");

echo "<script>
alert('Data Dihapus');
window.location='indexsuplier.php';
</script>";
