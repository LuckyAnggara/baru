<?php
    session_start();
    include '../config.php';
    $date =  date("Y/m/d H:i:s"); // tanggal
    
    $title = $_POST['judul']; // judul
    $deskripsi = $_POST['deskripsi']; // deskripsi
    $username = $_SESSION['username']; // username

    $query = mysqli_query($koneksi,"SELECT count(no) FROM task");
    $query_no_task = mysqli_query($koneksi,"SELECT count(no_task) FROM task WHERE username ='$username'"); 
    $data_no = mysqli_fetch_array($query);
    $data_no_task = mysqli_fetch_array($query_no_task);

    $jmlhdata = $data_no[0];
    $no = $jmlhdata+1; // no
    $jmlhdata = $data_no_task[0];
    $no_task = $jmlhdata+1; // no_task
    $status = false;

    $datedeadline = $_POST['tanggal']; // pengambilan tanggal deadline
    $deadline = date("Y-m-d", strtotime($datedeadline)); // pengolah tanggal deadline
    $sql = "INSERT INTO task VALUES ('".$no."','".$no_task."','".$username."','".$title."','".$deskripsi."','".$status."','".$deadline."','".$date."','".$date."')";
    $query = mysqli_query($koneksi, $sql);

    echo $sql;
?>