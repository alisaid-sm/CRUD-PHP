<?php
	
	include "koneksi.php";
	$id = $_GET ['id'];

	$koneksi->query("delete from produk where id ='$id'");

?>


<script type="text/javascript">
		window.location.href="index.php";
</script>