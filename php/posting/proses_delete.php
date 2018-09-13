    <?php
    session_start();
    	include '../config.php';
        $date =  date("Y/m/d H:i:s");
        $no = $_POST['no'];
        $username = $_SESSION['username'];
        $query = mysqli_query($koneksi,"UPDATE postfeed SET status_delete = '1' where no = '".$no."'"); 
        $data = mysqli_fetch_array($query);   
    ?>