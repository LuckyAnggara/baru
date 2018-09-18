<?php
    session_start();
    include '../config.php';
    $date =  date("Y/m/d H:i:s"); // tanggal
    $no = $_POST['no']; // judul
    $status = true;
    $result = mysqli_query($koneksi, "UPDATE task SET status_task ='.$status.', last_update = '".$date."' WHERE no_task = '$no'");
?>