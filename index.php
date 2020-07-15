<?php
    error_reporting(0);
    
    include "koneksi.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Miftakh Ali Said</title>
  </head>
  <body>
    <div class="container">
    <h1>Tugas 10</h1>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Keterangan Harga</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
            <?php

                $no = 1;

                $sql = $koneksi->query("select * from produk");

                while ($data= $sql->fetch_assoc()) {

            ?>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <td scope="row"><?php echo $data['nama'];?></td>
          <td scope="row"><?php echo $data['harga'];?></td>
          <td scope="row"><?php echo $data['jumlah'];?></td>
          <td>
            <a href="ubah.php?id=<?php echo $data['id']; ?>" class="btn btn-primary" style="margin-top: 8px;">Ubah</a>
            <a href="hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-danger" style="margin-top: 8px;">Hapus</a>
          </td>
        </tr>
        <?php  } ?>
      </tbody>
    </table>
    <a href="tambah.php" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i>Tambah</a>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>