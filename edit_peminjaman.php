<?php 
   require "konfig.php";
   
    $id = $_GET['id'];
    $q = mysqli_query($conn,"select * from peminjaman where id=$id");
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
	<a href="peminjaman.php">< Kembali</a><br>
	<h4>EDIT PEMINJAMAN</h4>
	
	<form action="update_peminjaman.php" method="post">	
		<input type="hidden" name="id" value="<?php echo $id?>">
		<table cellpadding="5">
			<tr>
				<th align="left">Tanggal</th>
				<td><input type="date" name="tgl" size="12" maxlength="12" value="<?php echo $tgl?>"></td>
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
					     	?>		
								<option value="<?php echo $row['no']?>" <?php if($row['no']==$anggota) echo 'selected'?>><?php echo $row['no'].' - '.$row['nama']?></option>
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
						?>		
								<option value="<?php echo $row['id']?>"  <?php if($row['id']==$buku) echo 'selected'?>><?php echo $row['judul']?></option>
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
