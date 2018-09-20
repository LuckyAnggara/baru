<?php
    session_start();
    include '../config.php';
    $date =  date("Y/m/d H:i:s"); // tanggal
    $no = $_POST['no']; // judul
    $status = true;
    $result = mysqli_query($koneksi, "DELETE FROM task WHERE no_task = '$no'");
?>