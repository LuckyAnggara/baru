<?php
include 'function.php';
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
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $query = mysqli_query($koneksi,"SELECT * FROM surat_keluar JOIN nama_unit USING(kd_unit)"); 
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $data['no_surat'];?></td> 
                                            <td><?php echo $data['tanggal'];?></td>  
                                            <td><?php echo $data['tujuan'];?></td>  
                                            <td><?php echo $data['nama'];?></td>  
                                            <td><?php echo $data['hal'];?></td> 
                                            <td><?php echo $data['output'];?></td> 
                                        <?php

                                            if($data['lampiran']){
                                            ?>

                                            <td>
                                                <a name="<?php echo $data['no_surat'];?>" data-toggle="modal" data-target="#largeModal" name="show">
                                                <i class="material-icons">remove_red_eye</i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#largeModal">
                                                <i class="material-icons">file_upload</i>
                                                </a>
                                            </td>

                                            <?php
                                            }else{
                                            ?>
                                            <td><a href="../../surat_keluar.php?id=<?php echo $data['no_surat'];?>" data-toggle="modal" data-target="#largeModal" name="show">
                                                <i class="material-icons">remove_red_eye</i>
                                                </a>
                                                <i class="material-icons">file_upload</i>
                                            </td>
                                            <?php
                                            }
                                            ?>

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