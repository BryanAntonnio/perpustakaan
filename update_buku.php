<?php 
 require "konfig.php";

   $id = $_POST['id'];
   $judul = $_POST['judul'];
   $pengarang = $_POST['pengarang'];
   $penerbit = $_POST['penerbit'];
   
   $sql="update buku set judul='$judul',pengarang='$pengarang',penerbit='$penerbit' where id='$id'";
   $result = mysqli_query($conn,$sql); 
   
   header('Location:buku.php'); 
?>
