<?php 
 require "konfig.php";

   $id = $_GET['id'];
   
   $sql="update peminjaman set status='1' where id='$id'";
   $result = mysqli_query($conn,$sql); 
   
   $q = mysqli_query($conn,"select buku from peminjaman where id=$id");
   $row = mysqli_fetch_array($q);
   extract($row); 
  
   $sql="update buku set dipinjam='', tgl_kembali=null where id='$buku'";
   $result = mysqli_query($conn,$sql); 
   
   header('Location:peminjaman.php'); 
?>
