    <?php

    	include 'config.php';

        $date = $_POST['tanggal'];
        $tanggal = date("Y-m-d", strtotime($date));
        $unit = $_POST['unit'];
        $tujuan = $_POST['tujuan'];
        $hal = $_POST['hal'];
        
        $query = mysqli_query($koneksi,"SELECT count(no_surat) FROM surat_keluar"); 
        $data = mysqli_fetch_array($query);
        $no = $data[0]+1;

        $output = "GRT/".$unit."/".$no."/".date('Y',strtotime($date));

        if(isset($date,$tanggal,$unit,$tujuan,$hal,$no)){

        $sql = "INSERT INTO surat_keluar (no_surat,tanggal,kd_unit,tujuan,hal,output) values ('".$no."','".$tanggal."','".$unit."','".$tujuan."','".$hal."','".$output."')";
        $query = mysqli_query($koneksi, $sql);
        }

    ?>