<?php 
 require "konfig.php";

   $judul = $_POST['judul'];
   $pengarang = $_POST['pengarang'];
   $penerbit = $_POST['penerbit'];
   
   $sql="insert into buku(judul,pengarang,penerbit) values('$judul','$pengarang','$penerbit')";
   $result = mysqli_query($conn,$sql); 
   
   header('Location:buku.php'); 
?>
