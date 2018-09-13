    <?php
    session_start();
    	include '../config.php';
        $date =  date("Y/m/d H:i:s");
        $text = $_POST['post'];
        $username = $_SESSION['username'];
        $query = mysqli_query($koneksi,"SELECT count(no) FROM postfeed"); 
        $data = mysqli_fetch_array($query);
        $jmlhdata = $data[0];
        $no = $jmlhdata+1;      
        $sql = "INSERT INTO postfeed values ('".$no."','".$username."','".$text."','".$date."','0')";
        $query = mysqli_query($koneksi, $sql);
    ?>