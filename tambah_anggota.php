<body>
	<style>
		a {	
			text-decoration: none;
		}
		a:link, a:visited {color:blue;}
	</style>
	<a href="anggota.php">< Kembali</a><br>
	<h4>TAMBAH ANGGOTA</h4>
	
	<form action="simpan_anggota.php" method="post">	
		<table cellpadding="5">
			<tr>
				<th>No Anggota</th>
				<td><input type="text" name="no" size="10"></td>
			</tr>
			<tr>
				<th>Nama Anggota</th>
				<td><input type="text" name="nama" size="30"></td>
			</tr>
			<tr height="50px">
				<td colspan="2"><button type="submit">Simpan</a> </td>
			</tr>
		</table>
	</form>	
</body>
