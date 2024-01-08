<body>
	<style>
		a {	
			text-decoration: none;
		}
		a:link, a:visited {color:blue;}
	</style>
	<a href="buku.php">< Kembali</a><br>
	<h4>TAMBAH BUKU</h4>
	
	<form action="simpan_buku.php" method="post">	
		<table cellpadding="5">
			<tr>
				<th align="left">Judul Buku</th>
				<td><input type="text" name="judul" size="50" maxlength="50"></td>
			</tr>
			<tr>
				<th align="left">Nama Pengarang</th>
				<td><input type="text" name="pengarang" size="30" maxlength="30"></td>
			</tr>
			<tr>
				<th align="left">Penerbit</th>
				<td><input type="text" name="penerbit" size="30" maxlength="30"></td>
			</tr>
			<tr height="50px"  align="left">
				<td colspan="2"><button type="submit">Simpan</a> </td>
			</tr>
		</table>
	</form>	
</body>
