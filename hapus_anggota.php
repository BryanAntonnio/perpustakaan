<?php 
   require "konfig.php";

   $no = $_GET['no'];
   
   $sql="delete from anggota where no='$no'";
   $result = mysqli_query($conn,$sql); 
   
   header('Location:anggota.php'); 
?>
