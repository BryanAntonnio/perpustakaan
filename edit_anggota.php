<?php 
	require "konfig.php";
	
	$no = $_GET['no'];
    $q = mysqli_query($conn,"select * from anggota where no='$no'");
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
	<a href="anggota.php">< Kembali</a><br>
	<h4>EDIT ANGGOTA</h4>
	
	<form action="update_anggota.php" method="post">	
		<table cellpadding="5">
			<tr>
				<th align="left">No Anggota</th>
				<td><input type="text" name="no" size="10" maxlength="10" style="background:#ddd" value="<?php echo $no?>" readonly></td>
			</tr>
			<tr>
				<th align="left">Nama Anggota</th>
				<td><input type="text" name="nama" size="30" maxlength="30" value="<?php echo $nama?>"></td>
			</tr>
				<tr height="50px"  align="left">
				<td colspan="2"><button type="submit">Simpan</a> </td>
			</tr>
		</table>
	</form>	
</body>
