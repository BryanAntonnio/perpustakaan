<?php 
   require "konfig.php";

   $id = $_GET['id'];
   
   $sql="delete from peminjaman where id=$id";
   $result = mysqli_query($conn,$sql); 
   
   header('Location:peminjaman.php'); 
?>
