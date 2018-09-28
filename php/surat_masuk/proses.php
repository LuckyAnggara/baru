    <?php
    session_start();
    	include '../config.php';

        $date = $_POST['tanggal'];
        $tanggal = date("Y-m-d", strtotime($date));
        $detail_date = date("H:i:s d-m-Y");
        $pengirim = $_POST['pengirim'];
        $no_surat = $_POST['no_surat'];
        $hal = $_POST['hal'];
        $username = $_SESSION['username'];
        $query = mysqli_query($koneksi,"SELECT count(no_register) FROM surat_masuk"); 
        $data = mysqli_fetch_array($query);
        $jmlhdata = $data[0];
        $no = $jmlhdata+1;

        if(isset($no,$tanggal,$no_surat,$pengirim,$hal)){

        $sql = "INSERT INTO surat_masuk (no_register,tanggal,no_surat,pengirim,hal,username,detail_date) values ('".$no."','".$tanggal."','".$no_surat."','".$pengirim."','".$hal."','".$username."','".$detail_date."')";
        $query = mysqli_query($koneksi, $sql);
        echo $query;
        }

    ?>