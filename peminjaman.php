<?php require "konfig.php"?>
<body>
	<style>
		a {	
			text-decoration: none;
		}
		a:link, a:visited {color:blue;}
	</style>
	
	<a href="index.php">< Kembali</a>
	<h4>DAFTAR PEMINJAMAN</h4>
	<a href="tambah_peminjaman.php">Tambah Peminjaman</a>
	<br><br>
	<table border=1 cellpadding="6">
		<tr>
			<th>No</th><th>Tanggal Pinjam</th><th>Nama Peminjam</th><th>Judul Buku</th><th>Tanggal Kembali</th><th>Status</th><th>Aksi</th>
		</tr>
		<?php
			$q = mysqli_query($conn,"select p.*,b.judul,a.nama from peminjaman p 
			              left outer join anggota a on(p.anggota=a.no)
						  left outer join buku b on(b.id=p.buku) order by p.id");
			if (mysqli_num_rows($q)>0) 
			{
				$i=0; 
				while($row = mysqli_fetch_array($q)) {
					extract($row);
					$i++;
					if($status=='1') $nstatus='Sudah Kembali'; else  $nstatus='';
				?>
					<tr>
						<td><?php echo $i?></td>
						<td><?php echo $tgl?></td>
						<td><?php echo $nama?></td>
						<td><?php echo $judul?></td>
						<td><?php echo $tgl_kembali?></td>
						<td><?php echo $nstatus?></td>
						<td>
							<a href="edit_peminjaman.php?id=<?php echo $id?>">Edit</a> &nbsp;&nbsp;
							<a href="hapus_peminjaman.php?id=<?php echo $id?>" style="color:red">Hapus</a> &nbsp;&nbsp;
							<?php if($status=='0'){?>
							<a href="kembalikan.php?id=<?php echo $id?>" style="color:green">Kembalikan</a> &nbsp;&nbsp;
							<?php } ?>
						</td>
					</tr>	
				<?php }
			}		
		?>
	</table>
</body>
