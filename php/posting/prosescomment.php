    <?php
    session_start();
    	include '../config.php';
        $date = date("d-m-Y");
        $text = $_POST['comment'];
        $nofeed = 8;
        $username = $_SESSION['username'];
        $query = mysqli_query($koneksi,"SELECT count(no) FROM comment_feed"); 
        $data = mysqli_fetch_array($query);
        $jmlhdata = $data[0];
        $no = $jmlhdata+1;      
        $sql = "INSERT INTO comment_feed values ('".$no."','".$nofeed."','".$text."','".$username."','".$date."')";
        $query = mysqli_query($koneksi, $sql);
    ?>