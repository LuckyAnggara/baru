<?php
session_start();
require '../../../php/function.php';
if( !isset($_SESSION['login']) ){
header("Location: /pages/sign-in/");
exit;
}


$timeout = $timeout * 60;
$logout_redirect_url = "../../../pages/sign-in/";

if ( isset($_SESSION['start_time']) ) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {

        $username = $_SESSION['username'];
        $result = mysqli_query($koneksi, "UPDATE users SET status ='0' WHERE username = '$username'");
        $_SESSION = [];
        session_unset();
        session_destroy();
        echo "<script>alert('Waktu Anda Telah Habis');window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Surat Masuk | BNI Garut E-Office System</title>
    <!-- Favicon-->
    <link rel="icon" href="../../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="../../../googlematerial_icon.css" rel="stylesheet">
    <link href="../../../google_font.css" rel="stylesheet">

    <!-- Bootstrap Core Css -->
    <link href="../../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../../../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="../../../plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="../../../plugins/filepond/filepond.css"" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="../../../plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="../../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="../../../plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <!-- JQuery DataTable Css -->
    <link href="../../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../../css/themes/all-themes.css" rel="stylesheet" />
    <!-- Memasukan config untuk database PHP -->

    


    <?php 
    include '../../../php/config.php';

    ?>

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../../">BNI Garut E-Office System</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <a href="../../../pages/profile/"><img src="../../../source/profile/<?php echo $_SESSION['username'];?>.png" width="48" height="48" alt="User" /></a>
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['nama'];?>
                    </div>
                    <div class="email">
                    <?php echo $_SESSION['username'];?>
                    </div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="../../../pages/profile/"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../../../pages/task/"><i class="material-icons">assignment_turned_in</i>Add Tasks</a></li>
                            <!-- <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li> -->
                            <li role="separator" class="divider"></li>
                            <li><a href="../../../php\logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="../../../">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>E-Register</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="javascript:void(0);" class="menu-toggle">
                                    Surat
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="../../../pages/surat/surat_keluar/">
                                        Surat Keluar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../../pages/surat/surat_keluar_rahasia/">
                                        Surat Keluar Rahasia
                                        </a>
                                    </li>
                                    <li  class="active">
                                        <a href="#">
                                        Surat Masuk
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    Teller
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="#">
                                        Reversal
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        Warkat
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        lain - lain
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    Customer Service
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="#">
                                        Pembukaan Rekening
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        Penutupan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        lain - lain
                                        </a>
                                    </li>
                                </ul>
                            </li>

                             <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    Umum
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="#">
                                        Bon Barang
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        Bon Barang Keluar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        lain - lain
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    Lain - Lain
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="#">
                                        Nota Intern
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        Memo
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        lain - lain
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Database</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/tables/normal-tables.html">Database Pegawai</a>
                            </li>
                            <li>
                                <a href="pages/tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="pages/tables/jquery-datatable.html">Jquery Datatables</a>
                            </li>
                            <li>
                                <a href="pages/tables/editable-table.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span>Gallery</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/medias/image-gallery.html">Event</a>
                            </li>
                            <li>
                                <a href="pages/medias/carousel.html">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Office Performance</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/charts/morris.html">DPK</a>
                            </li>
                            <li>
                                <a href="pages/charts/flot.html">Lending CR</a>
                            </li>
                            <li>
                                <a href="pages/charts/chartjs.html">Lending BB</a>
                            </li>
                            <li>
                                <a href="pages/charts/sparkline.html">Profit</a>
                            </li>
                            <li>
                                <a href="pages/charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>      
                    <li>
                        <a href="pages/changelogs.html">
                            <i class="material-icons">update</i>
                            <span>Changelogs</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);">joyLASTnight</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 0.1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->

        <!-- CHAT -->
        <?php
        $fixuser = $_SESSION['username'];
        $query = mysqli_query($koneksi, "SELECT * FROM users");
        ?>
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">CHAT</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="panel-group" id="accordion_17" role="tablist" aria-multiselectable="true">
                                        <?php $color=array("panel-col-brown","panel-col-green","panel-col-teal", "panel-col-pink", "panel-col-purple", "panel-col-indigo");
                                        ?>
                                        <?php foreach ($query as $data):?>
                                        <?php $i = array_rand($color,1);?>

                                        <div class="panel <?php echo $color[$i];?>">
                                            <div class="panel-heading" role="tab" id="headingTwo_17">
                                                <h4 class="panel-title">
                                                    <a class="collapsed font-14" role="button" data-toggle="collapse" data-parent="#accordion_<?php echo $data['username'];?>" href="#collapse_<?php echo $data['username'];?>" aria-expanded="false"
                                                       aria-controls="collapse_<?php echo $data['username'];?>">
                                                       <!-- <div class="image"> -->
                                                            <img src="../../../source/profile/<?php echo $data['username'];?>.png" width="24" height="24" alt="User"/>
                                                        <!-- </div> -->
                                                    <?php echo $data['nama'];?>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse_<?php echo $data['username'];?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_<?php echo $data['username'];?>">
                                                <div class="panel-body">
                                                    1
                                                    1
                                                    1
                                                    1
                                                    1
                                                    1
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach;?>

                                    </div>
                                </div>
                            </div>
                        </div>

                <!-- #END# Colorful Panel Items With Icon -->
                        



                    </ul>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>                     

    <section class="content">
        <!-- FORM INPUT SURAT MASUK -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                             FORM INPUT SURAT MASUK
                            </h2>
                        </div>
                        <form method="POST" id="form_input">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <label for = "tujuan">TANGGAL</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id ="tanggal" class="datepicker form-control" name="tanggal" placeholder="Tanggal Surat" required>
                                        </div>
                                    </div>
                                </div>              
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <label for = "no_surat">NO SURAT</label>
                                    <div class="form-group form-float">                                    
                                        <div class="form-line">
                                            <input type="text" class="form-control" id ="no_surat" name ="no_surat" placeholder="Masukan Nomor Surat" required>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <label for = "pengirim">PENGIRIM</label>
                                    <div class="form-group form-float">                                    
                                        <div class="form-line">
                                            <input type="text" class="form-control" id ="pengirim" name ="pengirim" placeholder="Masukan Nomor Surat" required>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <label for = "perihal">PERIHAL</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id = "hal" name = "hal" placeholder="Perihal Surat Masuk" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class ="button-demo js-modal-buttons">
                            <button type="button" id ="submit" data-color="blue" class="btn bg-blue btn-red waves">
                                 <i class="material-icons">chat</i>
                                <span>SUBMIT</span>
                            </button>  
                            </div>
                          </div>
                       </form>                         
                    </div>
                </div>
            </div>            
        <!-- #END# Select -->
        <?php 
        $sql = "SELECT * FROM surat_masuk";
        $data = mysqli_query($koneksi,$sql);
        ?>
        <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TABEL REGISTER SURAT MASUK
                            </h2>
                                    

                        </div>
                        <div class="body">
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
                                                <td><a data-toggle="modal" data-target="#modalb" class="btn bg-deep-purple btn-circle waves-effect waves-circle waves-float" role="button"data-tooltip="tooltip" data-placement="top" title="Klik untuk mendownload Hasil Scan Surat nya dan melakukan Disposisi">
                                                <i class="material-icons">cloud_upload</i>
                                                    </a>
                                                </td> 
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
    </section>

    <!-- For Material Design Colors -->
            <div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel"></h4>
                        </div>

                        <div class="modal-body" id="nomor">
                            
                        </div>

                        <div class="modal-footer">
                            <button type="button" id="update" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL -->
           <div class="modal fade" id="modalb" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Detail Surat Masuk</h4>
                        </div>
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
      

    <!-- Jquery Core Js -->



    <!-- Jquery Core Js -->
    <script src="../../../plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#submit").click(function(){
            var tanggal = $('#tanggal').val();
            var noSurat = $('#no_surat').val();
            var pengirim = $('#pengirim').val();
            var perihal = $('#hal').val();

            if((tanggal !="") && (noSurat != "")&&(pengirim != "")&&(perihal)!=""){

                var data = $('#form_input').serialize();
                $.ajax({
                    type: 'POST',
                    url: "../../../php/surat_masuk/proses.php",
                    data: data,
                    success: function() {
                    $('#tabelupdate').load("../../../php/surat_masuk/update.php"); 
                    $('#nomor').load("../../../php/surat_masuk/shownomor.php");
                    document.getElementById("tanggal").value = "";
                    document.getElementById("no_surat").value = "";
                    document.getElementById("pengirim").value = "";
                    document.getElementById("hal").value = "";
                    }
                });
                var color = $('.js-modal-buttons .btn').data('color');
                $('#mdModal .modal-content').removeAttr('class').addClass('modal-content modal-col-' + color);
                $('#mdModal').modal('show');
                
            }else{
                alert("DATA MASIH ADA YANG KOSONG");
                return false;  
            }         
        });
         
        });

        $("#1").click(function(){
            console.log('ada');
            $('#formDisposisi').load("../../../php/surat_masuk/upload_form.php");
            $('#largeModal').modal('show');
        });
    
    </script>
    <!-- Bootstrap Core Js -->
    <script src="../../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../../plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="../../../plugins/autosize/autosize.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="../../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../../../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="../../../plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="../../../plugins/sweetalert/sweetalert.min.js"></script>

    <script src="../../../plugins/filepond/filepond.js"></script>

    <!-- Moment Plugin Js -->
    <script src="../../../plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <!-- Custom Js -->
    <script src="../../../js/admin.js"></script>
    <script src="../../../js/pages/forms/basic-form-elements.js"></script>
    <script src="../../../js/pages/forms/form-validation.js"></script>
    <script src="../../../js/pages/ui/dialogs.js"></script>
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
    <!-- Demo Js -->
        <script src="../../../js/demo.js"></script>
        <script>
            $(function () {
            //Tooltip
            $('[data-tooltip="tooltip"]').tooltip({
                container: 'body'
            });

            //Popover
            $('[data-tooltip="popover"]').popover();
        })
    </script>

    
</body>

</html>