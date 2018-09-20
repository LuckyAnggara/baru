<?php
include '../function.php';
?>
                        <div class="table-responsive" id="tabelupdate">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No Surat</th>
                                            <th>Tanggal</th>
                                            <th>Tujuan</th>
                                            <th>Pengirim</th>
                                            <th>Perihal</th>
                                            <th>Prefix Surat</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No Surat</th>
                                            <th>Tanggal</th>
                                            <th>Tujuan</th>
                                            <th>Pengirim</th>
                                            <th>Perihal</th>
                                            <th>Prefix Surat</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $query = mysqli_query($koneksi,"SELECT * FROM surat_keluar JOIN nama_unit USING(kd_unit) ORDER BY no_surat DESC"); 
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr>
                                            <td>
                                                <a role="button" data-target="#defaultModal" data-toggle="modal" data-tooltip="tooltip"  data-placement="top" title="Klik untuk mengupload Hasil Scan Surat nya">
                                                    <?php echo $data['no_surat'];?>
                                                </a>
                                            </td> 
                                            <td><?php echo $data['tanggal'];?></td>  
                                            <td><?php echo $data['tujuan'];?></td>  
                                            <td><?php echo $data['nama'];?></td>  
                                            <td><?php echo $data['hal'];?></td> 
                                            <td><?php echo $data['output'];?></td>
                                            <?php $folder ="../../../uploads/surat_keluar/";
                                             if($data['lampiran']){
                                            ?>
                                            <td>
                                            <a href="<?php echo $folder.$data['lampiran'];?>" class="btn bg-purple btn-circle waves-effect waves-circle waves-float" download="<?php echo $data['output'].'-'.$data['hal'];?>" data-tooltip="tooltip" data-placement="top" title="Klik untuk mendownload Hasil Scan Surat nya">
                                                <i class="material-icons">file_download</i>
                                            </a>
                                         <!--    <a onclick ="view(<?php// echo $data['no_surat'];?>)" class="btn bg-purple btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">file_download</i>
                                            </a> -->
                                            </td>
                                            <?php
                                            }else{ ?>
                                            <td></td>
                                            <?php } ?>         
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                    
                    

                 <!-- Jquery DataTable Plugin Js -->
<script>

 $(function () {
            $('.js-basic-example').DataTable({
                responsive: true
            });

            //Exportable table
            $('.js-exportable').DataTable({
                "order": [[ 0, "desc" ]],
                dom: 'Bfrtip',
                responsive: true,
                buttons: [
                    'copy', 'excel',  'pdf', 'print'
                ]

            });
        });
    </script>