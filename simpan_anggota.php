<?php 
 require "konfig.php";

   $nama = $_POST['nama'];
   $no = $_POST['no'];
   
   $sql="insert into anggota(no,nama) values('$no','$nama')";
   $result = mysqli_query($conn,$sql); 
   
   header('Location:anggota.php'); 
?>
