<?php 
   require "konfig.php";
?>
<body>
	<style>
		a {	
			text-decoration: none;
		}
		a:link, a:visited {color:blue;}
	</style>
	<a href="peminjaman.php">< Kembali</a><br>
	<h4>TAMBAH PEMINJAMAN</h4>
	
	<form action="simpan_peminjaman.php" method="post">	
		<table cellpadding="5">
			<tr>
				<th align="left">Tanggal</th>
				<td><input type="date" name="tgl" size="12" maxlength="12" value="<?php echo date('Y-m-d')?>"></td>
			</tr>
			<tr>
				<th align="left">Anggota</th>
				<td>
					<select name="anggota"> 
						<option></option>
						<?php
						$q = mysqli_query($conn,"select * from anggota");
						if (mysqli_num_rows($q)>0) 
						{
							$i=0; 
							while($row = mysqli_fetch_array($q)) {
								extract($row);
								echo '-';
						?>		
								<option value="<?php echo $no?>"><?php echo $no.' - '.$nama?></option>
							<?php }
						} ?>
					</select>
				</td>
			</tr>
			<tr>
				<th align="left">Buku</th>
				<td>
					<select name="buku">
						<option></option>
						<?php
						$q = mysqli_query($conn,"select * from buku order by judul");
						if (mysqli_num_rows($q)>0) 
						{
							$i=0; 
							while($row = mysqli_fetch_array($q)) {
								extract($row);
						?>		
								<option value="<?php echo $id?>"><?php echo $judul?></option>
							<?php }
						} ?>
					</select>
				</td>
			</tr>
			<tr height="50px"  align="left">
				<td colspan="2"><button type="submit">Simpan</a> </td>
			</tr>
		</table>
	</form>	
</body>
