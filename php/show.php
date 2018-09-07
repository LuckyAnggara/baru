    <?php
    session_start();
 	require 'function.php';
        $no = $_SESSION['no'];
        $folder = "../../source/suratkeluar/";
        $query = mysqli_query($koneksi, "SELECT * FROM surat_keluar where no_surat = '$no'");
        $data = mysqli_fetch_array($query);
     if($data['lampiran']<>""){
     ?>
     <embed src="<?php echo $folder.$data['lampiran'];?>" width="900" height="600"> </embed>  
    
     <?php
     }else{

    ?>
     	<div class='align-center'>

        <h1> DATA TIDAK ADA</h1>
        </div>
        <?php
     }
     ?>

        <!-- // // if($data['no'] == )
        // $data = mysqli_fetch_array($query); -->

