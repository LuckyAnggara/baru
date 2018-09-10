    <?php
    session_start();
    	include '../config.php';
        if($_POST['instansi'] <> "" And $_POST['pic'] <> "" And $_POST['nohp'] <> "" And $_POST['resume'] <> ""){
        $date = $_POST['tanggal'];
        $tanggal = date("Y-m-d", strtotime($date));
        // $tglpembuatan = date("H:i:s d-m-Y");
        $instansi = $_POST['instansi'];
        $pic = $_POST['pic'];
        $nohp = $_POST['nohp'];
        $resume = $_POST['resume'];
        $username = $_SESSION['username'];
        $query = mysqli_query($koneksi,"SELECT count(no) FROM resume_kunjungan"); 
        $data = mysqli_fetch_array($query);
        $jmlhdata = $data[0];
        $no = $jmlhdata+1;
        $sql = "INSERT INTO resume_kunjungan values ('".$no."','".$tanggal."','".$instansi."','".$pic."','".$nohp."','".$resume."','".$username."')";
        $query = mysqli_query($koneksi, $sql);
        }

    ?>