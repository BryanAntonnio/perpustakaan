<?php require "konfig.php"?>
<body>
	<style>
		a {	
			text-decoration: none;
		}
		a:link, a:visited {color:blue;}
	</style>
	
	<a href="index.php">< Kembali</a>
	<h4>DAFTAR ANGGOTA</h4>
	<a href="tambah_anggota.php">Tambah Anggota</a>
	<br><br>
	<table border=1 cellpadding="6">
		<tr>
			<th>No</th><th>No Anggota</th><th>Nama Anggota</th><th>Aksi</th>
		</tr>
		<?php
			$q = mysqli_query($conn,"select * from anggota order by no");
			if (mysqli_num_rows($q)>0) 
			{
				$i=0; 
				while($row = mysqli_fetch_array($q)) {
					extract($row);
					$i++;
				?>
					<tr>
						<td><?php echo $i?></td>
						<td><?php echo $no?></td>
						<td><?php echo $nama?></td>
						<td>
							<a href="edit_anggota.php?no=<?php echo $no?>">Edit</a> &nbsp;&nbsp;
							<a href="hapus_anggota.php?no=<?php echo $no?>" style="color:red">Hapus</a>
						</td>
					</tr>	
				<?php }
			}		
		?>
	</table>
</body>
