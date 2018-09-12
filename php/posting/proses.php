    <?php
    session_start();
    	include '../config.php';
        $date = date("d-m-Y H:i:s");
        $text = $_POST['post'];
        $username = $_SESSION['username'];
        $query = mysqli_query($koneksi,"SELECT count(no) FROM postfeed"); 
        $data = mysqli_fetch_array($query);
        $jmlhdata = $data[0];
        $no = $jmlhdata+1;      
        $sql = "INSERT INTO postfeed values ('".$no."','".$username."','".$text."','".$date."')";
        $query = mysqli_query($koneksi, $sql);
    ?>