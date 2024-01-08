<?php 
 require "konfig.php";

   $tgl = $_POST['tgl'];
   $anggota = $_POST['anggota'];
   $buku = $_POST['buku'];
   $tgl_kembali=date('Y-m-d', strtotime($tgl. ' + 7 days'));
   
   $sql="insert into peminjaman(tgl,anggota,buku,tgl_kembali,status) values('$tgl','$anggota','$buku','$tgl_kembali','0')";
   $result = mysqli_query($conn,$sql); 
   
   $sql="update buku set dipinjam='Y', tgl_kembali='$tgl_kembali' where id='$buku'";
   $result = mysqli_query($conn,$sql); 
   
   header('Location:peminjaman.php'); 
?>
