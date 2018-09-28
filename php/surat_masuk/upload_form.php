<?php
session_start();
require '../function.php';
?>

                  <div class="modal-body" id="formDisposisi">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                              
                                    <div class="body">
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <label for = "no_register">NO REGISTER</label>
                                                <div class="form-group form-float">                                    
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id ="no_register1" name ="no_register1" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for = "no_surat">NO SURAT</label>
                                                <div class="form-group form-float">                                    
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id ="no_surat1" name ="no_surat1" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <label for = "pengirim">PENGIRIM</label>
                                                <div class="form-group form-float">                                    
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id ="pengirim1" name ="pengirim1" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <label for = "hal">PERIHAL</label>
                                                <div class="form-group form-float">                                    
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id ="hal1" name ="hal1" disabled>
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
                        
    <!-- Bootstrap Core Js -->
    <script src="../../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../../plugins/bootstrap-select/js/bootstrap-select.js"></script>