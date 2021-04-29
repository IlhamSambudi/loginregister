<?php
//memasukkan file config.php
    include('config.php');
    if(isset($_POST['submit'])){
        $kode_buku			= @$_POST['id_buku'];
        $judul_buku			= @$_POST['judul'];
        $penerbit	    	= @$_POST['penerbit'];
        $stok	            = @$_POST['stok'];
       
        
        $cek = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$kode_buku'") or die(mysqli_error($koneksi));
        
        if(mysqli_num_rows($cek) == 0){
            $sql = mysqli_query($koneksi, "INSERT INTO buku(id_buku, judul, penerbit,stok ) VALUES('$kode_buku', '$judul_buku', '$penerbit','$stok')") or die(mysqli_error($koneksi));
            
            if($sql){
                echo '<script>alert("Berhasil menambahkan data."); document.location="tampil.php";</script>';
            }else{
                echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
            }
        }else{
            echo '<div class="alert alert-warning">Gagal, kode_buku sudah terdaftar.</div>';
        }
    }
