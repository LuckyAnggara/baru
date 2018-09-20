    <?php
    session_start();
 	require 'function.php';
        $no = $_SESSION['no'];
        $folder = "../../../uploads/surat_keluar/";
        $query = mysqli_query($koneksi, "SELECT * FROM surat_keluar where no_surat = '$no'");
        $data = mysqli_fetch_array($query);
     if($data['lampiran']<>""){
     ?>
     <a href="<?php echo $folder.$data['lampiran'];?>" download> 
    
     <?php
     }
    ?>

        <!-- // // if($data['no'] == )
        // $data = mysqli_fetch_array($query); -->

