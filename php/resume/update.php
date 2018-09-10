<?php
include '../function.php';
?>
<div class="table-responsive" id="tabelupdate">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nama Instansi</th>
                                            <th>PIC</th>
                                            <th>No Hp</th>
                                            <th>Petugas</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nama Instansi</th>
                                            <th>PIC</th>
                                            <th>No Hp</th>
                                            <th>Petugas</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $query = mysqli_query($koneksi,"SELECT * FROM resume_kunjungan"); 
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $data['no'];?></td> 
                                            <td><?php echo $data['tanggal'];?></td>  
                                            <td><?php echo $data['nama_instansi'];?></td>  
                                            <td><?php echo $data['pic'];?></td>  
                                            <td><?php echo $data['no_hp'];?></td> 
                                            <td><?php echo $data['username'];?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
</div>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>
