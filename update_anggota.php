<?php 
 require "konfig.php";

   $nama = $_POST['nama'];
   $no = $_POST['no'];
   
   $sql="update anggota set nama='$nama' where no='$no'";
   $result = mysqli_query($conn,$sql); 
   
   header('Location:anggota.php'); 
?>
