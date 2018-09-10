<?php
include 'php/config.php';
 $query = mysqli_query($koneksi,"SELECT * FROM resume_kunjungan where no ='2'"); 
 $data = mysqli_fetch_array($query);
 $tampil = $data['resume'];
 echo $tampil;
?>