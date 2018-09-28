<?php
		
		include '../config.php';
		$query = mysqli_query($koneksi, "SELECT * FROM surat_masuk ORDER BY no_register DESC LIMIT 1");
        // if($data['no'] == )
        $data = mysqli_fetch_array($query);
        echo "<div class='align-center'";
        echo "<h3> NOMOR SURAT MASUK ANDA :</h3></br>";
        echo "<h1 style= 'font-size : 90px;'>".$data['no_surat']."<h1></br>";
    	// }else{
    	// echo "TAI";
    	// }


?>