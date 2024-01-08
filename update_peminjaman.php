<?php 
 require "konfig.php";

   $id = $_POST['id'];
   $tgl = $_POST['tgl'];
   $anggota = $_POST['anggota'];
   $buku = $_POST['buku'];
   $tgl_kembali=date('Y-m-d', strtotime($tgl. ' + 7 days'));
   
   $sql="update peminjaman set tgl='$tgl',anggota='$anggota',buku='$buku', tgl_kembali='$tgl_kembali' where id=$id"; 
   $result = mysqli_query($conn,$sql); 
   
   $sql="update buku set dipinjam='Y', tgl_kembali='$tgl_kembali' where id='$buku'";
   $result = mysqli_query($conn,$sql); 
   
   header('Location:peminjaman.php'); 
?>
