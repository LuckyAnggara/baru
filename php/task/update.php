<?php
session_start();
require '../../php/function.php';
?>
    <div class="card" id="tabelupdate"> 
                        <div class="header">
                            <h2>
                                Task To Do List - <?php echo $_SESSION['nama'];?>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Deadline</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Deadline</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $username = $_SESSION['username'];
                                        $query = mysqli_query($koneksi,"SELECT * FROM task JOIN users USING(username) where username = '$username' ORDER BY no_task DESC"); 
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $data['no_task'];?></td> 
                                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $data['deskripsi'];?>"><?php echo $data['judul'];?></td>  

                                            <td><?php echo $data['deadline'];?></td>

                                            <?php if($data['status_task']==0){
                                            ?>

                                            <td>BELUM</td>

                                            <td>
                                            <a  class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Klik untuk Selesai">
                                            <i class="material-icons">check</i>
                                            </a>
                                            <a class="btn bg-purple btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="material-icons">delete</i>
                                            </a>
                                            </td>



                                            <?php
                                            }else{ ?>
                                            <td>SUDAH</td>
                                            <td>
                                            <a  class="btn bg-black btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Task Telah Selesai">
                                            <i class="material-icons">check</i>
                                            </a>
                                            <a class="btn bg-purple btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="material-icons">delete</i>
                                            </a>
                                            </td>
                                            <?php } ?>


                                               

                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

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