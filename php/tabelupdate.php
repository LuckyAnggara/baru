<?php
include 'function.php';
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="tabelupdate">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ANJING REGISTER SURAT KELUAR
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
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
                                        $query = mysqli_query($koneksi,"SELECT * FROM surat_keluar JOIN nama_unit USING(kd_unit) ORDER BY no_surat DESC"); 
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
                        </div>
                    </div>
                </div>

                 <!-- Jquery DataTable Plugin Js -->

    <script src="../../js/pages/tables/jquery-datatable.js"></script>