<?php
    //jika tombol simpan di tekan/klik
    if(isset($_POST['submit'])){
        $nama			= $_POST['nama'];
        $jenis_kelamin	= $_POST['jenis_kelamin'];
        $jurusan		= $_POST['jurusan'];
        
        $sql = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan' WHERE id='$id'") or die(mysqli_error($koneksi));
        
        if($sql){
            echo '<script>alert("Berhasil menyimpan data."); document.location="edit.php?id='.$id.'";</script>';
        }else{
            echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
        }
    }
?>