<?php require "konfig.php"?>
<body>
	<style>
		a {	
			text-decoration: none;
		}
		a:link, a:visited {color:blue;}
	</style>
	
	<a href="index.php">< Kembali</a>
	<h4>DAFTAR BUKU</h4>
	<a href="tambah_buku.php">Tambah Buku</a>
	<br><br>
	<table border=1 cellpadding="6">
		<tr>
			<th>No</th><th>Judul Buku</th><th>Nama Pengarang</th><th>Nama Penerbit</th><th>Aksi</th>
		</tr>
		<?php
			$q = mysqli_query($conn,"select * from buku order by judul");
			if (mysqli_num_rows($q)>0) 
			{
				$i=0; 
				while($row = mysqli_fetch_array($q)) {
					extract($row);
					$i++;
				?>
					<tr>
						<td><?php echo $i?></td>
						<td><?php echo $judul?></td>
						<td><?php echo $pengarang?></td>
						<td><?php echo $penerbit?></td>
						<td>
							<a href="edit_buku.php?id=<?php echo $id?>">Edit</a> &nbsp;&nbsp;
							<a href="hapus_buku.php?id=<?php echo $id?>" style="color:red">Hapus</a>
						</td>
					</tr>	
				<?php }
			}		
		?>
	</table>
</body>
