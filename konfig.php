<?php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "perpustakaan");
 
//membuat koneksi dengan database
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE) or die('Unable to Connect');
?>