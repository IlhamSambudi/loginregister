<?php
	include('config.php');
	$id = @$_GET['id_buku'];
	$sql = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku='$id'");
	header('location:tampil.php');

?>