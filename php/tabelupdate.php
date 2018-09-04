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
                                        $query = mysqli_query($koneksi,"SELECT * FROM surat_keluar JOIN nama_unit USING(kd_unit) ORDER BY no_surat ASC"); 
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $data['no_surat'];?></td> 
                                            <td><?php echo $data['tanggal'];?></td>  
                                            <td><?php echo $data['tujuan'];?></td>  
                                            <td><?php echo $data['nama'];?></td>  
                                            <td><?php echo $data['hal'];?></td> 
                                            <td><?php echo $data['output'];?></td> 
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
</div>

                 <!-- Jquery DataTable Plugin Js -->

    <script src="../../js/pages/tables/jquery-datatable.js"></script>