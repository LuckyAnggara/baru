<?php
session_start();
require '../../php/function.php';
?>

    <div class="card" id="tabelupdate"> 
                        <div class="header">
                            <div class="switch pull-right">
                                    <label>Semua<input type="checkbox" id="nofilter" checked><span class="lever"></span>Belum Selesai</label>
                            </div>
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
                                        $no = 1;
                                        $query = mysqli_query($koneksi,"SELECT * FROM task JOIN users USING(username) where username = '$username' and status_task = 0 ORDER BY no_task DESC"); 
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no;?></td> 
                                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $data['deskripsi'];?>"><?php echo $data['judul'];?></td>  

                                            <td><?php echo $data['deadline'];?></td>

                                            <?php if($data['status_task']==0){
                                            ?>

                                            <td>BELUM</td>

                                            <td>
                                            <a  onclick="selesaiCheck(<?php echo $data['no_task'];?>)" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Klik untuk Selesai">
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
                                            <a onclick="deleteCheck(<?php echo $data['no_task'];?>)"  class="btn bg-purple btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="material-icons">delete</i>
                                            </a>
                                            </td>
                                            <?php } ?>


                                               

                                        </tr>
                                        <?php $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<script src="../../js/datatabel.js"></script>
<script src="../../php/task/done.js"></script>
<script src="../../js/pages/ui/tooltips-popovers.js"></script>