<?php
include '../function.php'; 
$sql = "SELECT * FROM surat_masuk";
$data = mysqli_query($koneksi,$sql);
?>
                        <div class="table-responsive" id="tabelupdate">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No Register</th>
                                            <th>Tanggal</th>
                                            <th>No Surat</th>
                                            <th>Pengirim</th>
                                            <th>Perihal</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No Register</th>
                                            <th>Tanggal</th>
                                            <th>No Surat</th>
                                            <th>Pengirim</th>
                                            <th>Perihal</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($data as $key):?>
                                            <tr>
                                                <td><?php echo $key['no_register'];?></td> 
                                                <td><?php echo $key['tanggal'];?></td> 
                                                <td><?php echo $key['no_surat'];?></td> 
                                                <td><?php echo $key['pengirim'];?></td> 
                                                <td><?php echo $key['hal'];?></td> 
                                                <td><a data-toggle="modal" data-target="#modal_<?php echo $key['no_register'];?>" class="btn bg-deep-purple btn-circle waves-effect waves-circle waves-float" role="button"data-tooltip="tooltip" data-placement="top" title="Klik untuk mendownload Hasil Scan Surat nya dan melakukan Disposisi">
                                                <i class="material-icons">cloud_upload</i>
                                                    </a>
                                                </td> 
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>                                    
                                </table>
                            </div>

                            <?php foreach ($data as $key):?>
           <div class="modal fade" id="modal_<?php echo $key['no_register'];?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Detail Surat Masuk Nomor <?php echo $key['no_register'];?></h4>
                        </div>
                        <div class="modal-body" id="formDisposisi">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                              
                                    <div class="body">
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <label for = "no_register">NO REGISTER</label>
                                                <div class="form-group form-float">                                    
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id ="no_register1" name ="no_register1" disabled value="<?php echo $key['no_register'];?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for = "no_surat">NO SURAT</label>
                                                <div class="form-group form-float">                                    
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id ="no_surat1" name ="no_surat1" disabled value="<?php echo $key['no_surat'];?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <label for = "pengirim">PENGIRIM</label>
                                                <div class="form-group form-float">                                    
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id ="pengirim1" name ="pengirim1" disabled value="<?php echo $key['pengirim'];?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <label for = "hal">PERIHAL</label>
                                                <div class="form-group form-float">                                    
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id ="hal1" name ="hal1" disabled value="<?php echo $key['hal'];?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- FORM DISPOSISI -->
                                        <?php $query = mysqli_query($koneksi,"SELECT * FROM nama_unit"); ?>
                                        <div class="card">
                                            <div class="header">
                                                <h5>
                                                    Upload Surat dan Disposisi surat
                                                </h5>
                                            </div>                                            
                                            <div class="body">
                                                <div class="row clearfix">
                                                    <div class="col-md-3">
                                                        <p>
                                                            <b>Disposisi</b>
                                                        </p>
                                                        <select class="form-control show-tick" data-live-search="true" data-size="5" multiple>
                                                            <?php foreach ($query as $data) :?>
                                                            <option><?php echo $data['nama'];?>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                           <form action ="upload.php" id="uploadForm">
                                                              <div class="form-group">
                                                                <label for="exampleFormControlFile1">Upload File</label>
                                                                <input type="file" class="form-control-file" name="fileUpload" id="fileUpload">
                                                              </div>
                                                            </form>
                                                    </div>
                                                </div>
                                                    <button type="button" id ="" class="btn bg-brown btn-red waves">
                                                     <i class="material-icons">chat</i>
                                                    <span>SUBMIT</span>
                                                    </button>    
                                            </div>
                                        </div>
                                        <!-- akhir disposisi -->
                                    </div>
                              </div>                     
                        </div> 
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
                    
                    

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