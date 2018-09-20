    <?php
    session_start();
    	include '../config.php';

        $date = $_POST['tanggal'];
        $tanggal = date("Y-m-d", strtotime($date));
        $tglpembuatan = date("H:i:s d-m-Y");
        $unit = $_POST['unit'];
        $tujuan = $_POST['tujuan'];
        $hal = $_POST['hal'];
        $username = $_SESSION['username'];
        $query = mysqli_query($koneksi,"SELECT count(no_surat) FROM surat_keluar"); 
        $data = mysqli_fetch_array($query);
        $jmlhdata = $data[0];
        $no = $jmlhdata+1;
        

        $output = "GRT/".$unit."/".$no."/".date('Y',strtotime($date));

        if(isset($date,$tanggal,$unit,$tujuan,$hal,$no)){

        $sql = "INSERT INTO surat_keluar (no_surat,tanggal,kd_unit,tujuan,hal,output,username) values ('".$no."','".$tanggal."','".$unit."','".$tujuan."','".$hal."','".$output."','".$username."')";
        $query = mysqli_query($koneksi, $sql);
        }

    ?>