<?php
    session_start();
 	require '../function.php';
        $no = $_SESSION['noresume'];
        $query = mysqli_query($koneksi, "SELECT * FROM resume_kunjungan where no = '$no'");
        $data = mysqli_fetch_array($query);
     ?>

     <div class="modal-body-2">                   
                                 <div class="header">
                                    <h3>Resume Instansi</h3>
                                </div>
                                <div class="body">
                                    <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nama_instansi">Nama Instansi</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nama_instansi" class="form-control" value ="<?php echo $data['nama_instansi']; ?>" disabled>
                                                    </div>
                                                </div>
                                            </div>                                
                                    </div>
                                    <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nohp">Nama PIC</label>
                                            </div>
                                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nohp" class="form-control" value ="<?php echo $data['pic']; ?>" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nohp">No Hp</label>
                                            </div>
                                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nohp" class="form-control" value ="<?php echo $data['no_hp']; ?>" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="card">
                                                    <div class="header">
                                                        <h2>RESUME</h2>
                                                    </div>
                                                    <div class="body">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <textarea rows="20" id="resume" name="resume" class="form-control no-resize auto-growth" disabled>
<?php echo $data['resume']; ?>
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>                       
                                              
                        </div>

