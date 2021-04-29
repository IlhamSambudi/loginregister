<?php

include('navbar.php');


?>

<!doctype html>
<html>

<head>
    <title> BOOKS FACE </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script>
        $(document).ready(function() {
            $("#myModal").on("show.bs.modal", function(event) {
                // Get the button that triggered the modal
                var button = $(event.relatedTarget);

                // Extract value from the custom data-* attribute
                var titleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
    </script>
    <style>
        .bs-example {
            margin: 20px;
        }

        .teks {
            color: white;
            font-family: "Ink Free";
        }
        .teks1 {
            color: white;
            font-family: "Comic Sans MS";
        }
    </style>
</head>

<body>

    <div class="container" style="margin-top:20px ">
        <h2 class="teks">Daftar Buku</h2>
        <hr>
        <table class="table table-striped table-hover table-sm table-bordered">
            <thead class="thead-dark">
                <tr class="teks">
                    <th>NO.</th>
                    <th>ID BUKU </th>
                    <th>JUDUL BUKU</th>
                    <th>PENERBIT</th>
                    <th>STOK</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //query ke database SELECT tabel t_buku urut berdasarkan id yang paling besar
                $sql = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id_buku DESC") or die(mysqli_error($koneksi));
                //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
                if (mysqli_num_rows($sql) > 0) {
                    //membuat variabel $no untuk menyimpan nomor urut
                    $no = 1;
                    //melakukan perulangan while dengan dari dari query $sql
                    while ($data = mysqli_fetch_assoc($sql)) {
                ?>


                        <tr class="teks1">

                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['id_buku']; ?></td>
                            <td><?php echo $data['judul']; ?></td>
                            <td><?php echo $data['penerbit']; ?></td>
                            <td><?php echo $data['stok']; ?></td>


                            <td>
                                <a href="#edit<?php echo $data['id_buku']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                <a href="#del<?php echo $data['id_buku']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                <?php include('modal_form.php'); ?>
                            </td>
                        </tr>
                <?php

                        $no++;
                    }
                   
                } else {
                    echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
                }
                ?>
            <tbody>
        </table>

        <div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-title="tambahBuku">Tambah Data</button>
        </div>
        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="tambah.php" method="post" >
                        <div class="modal-header">
                            <h5 class="modal-title" >Tambah Data Buku</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">Kode Buku:</label>
                                <input type="text" name="id_buku" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Judul Buku:</label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">Penerbit:</label>
                            <input type="text" name="penerbit" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Stok:</label>
                            <input type="number" name="stok" class="form-control">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</body>

</html>