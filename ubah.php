<?php 
error_reporting(0);
include "koneksi.php";

 $id = $_GET['id'];

  $sql = $koneksi->query("select * from produk where id = '$id'");

  $tampil = $sql->fetch_assoc();
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
      <form method="POST">
      <div class="form-group">
        <label for="nama">Nama Produk</label>
        <input class="form-control" id="nama" name="nama" value="<?php echo $tampil['nama']?>">
      </div>
      <div class="form-group">
        <label for="harga">Harga</label>
        <input class="form-control" id="harga" name="harga" value="<?php echo $tampil['harga']?>">
      </div>
      <div class="form-group">
        <label for="jumlah">Jumlah</label>
        <input class="form-control" id="jumlah" name="jumlah" value="<?php echo $tampil['jumlah']?>" >
      </div>
      <div class="tile-footer">
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
      </div>
    </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
 <?php
  $nama = $_POST ['nama'];
  $harga = $_POST ['harga'];
  $jumlah = $_POST ['jumlah'];
  
  $simpan = $_POST ['simpan'];


  if ($simpan) {
    
    $sql = $koneksi->query("update produk set nama='$nama', harga='$harga', jumlah='$jumlah' where id='$id'");
    if ($sql) {
      ?>
        <script type="text/javascript">
          
          alert ("Data Berhasil Diubah");
          window.location.href="index.php";

        </script>
      <?php
    }
  }

 ?>