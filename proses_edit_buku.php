<?php
include('config.php');

$id = @$_GET['id_buku'];

$JudulBuku = @$_POST['JUDUL'];
$Penerbit = @$_POST['PENERBIT'];
$Stok = @$_POST['STOK'];


$sql = mysqli_query($koneksi, "UPDATE `buku` SET judul='$JudulBuku', penerbit='$Penerbit',  stok='$Stok' where id_buku='$id'");
if ($sql) {
    echo '<script>alert("Berhasil menyimpan data."); document.location="tampil.php?id_buku='.$id.'";</script>';
} else {
    echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
}
    // header('location:tampil_buku.php');
