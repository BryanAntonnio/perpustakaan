<?php 
	require "konfig.php";
	
	$id = $_GET['id'];
    $q = mysqli_query($conn,"select * from buku where id=$id");
	$row = mysqli_fetch_array($q);
	extract($row);
?>
<body>
	<style>
		a {	
			text-decoration: none;
		}
		a:link, a:visited {color:blue;}
	</style>
	<a href="buku.php">< Kembali</a><br>
	<h4>EDIT BUKU</h4>
	
	<form action="update_buku.php" method="post">	
	    <input type="hidden" name="id" value="<?php echo $id?>">
		<table cellpadding="5">
			<tr>
				<th align="left">Judul Buku</th>
				<td><input type="text" name="judul" size="50" maxlength="50" value="<?php echo $judul?>"></td>
			</tr>
			<tr>
				<th align="left">Nama Pengarang</th>
				<td><input type="text" name="pengarang" size="30" maxlength="30" value="<?php echo $pengarang?>"></td>
			</tr>
			<tr>
				<th align="left">Penerbit</th>
				<td><input type="text" name="penerbit" size="30" maxlength="30" value="<?php echo $penerbit?>"></td>
			</tr>
			<tr height="50px"  align="left">
				<td colspan="2"><button type="submit">Simpan</a> </td>
			</tr>
		</table>
	</form>	
</body>
