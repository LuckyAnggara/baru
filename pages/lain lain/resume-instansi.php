<?php
session_start();
require '../../php/function.php';
if( !isset($_SESSION['login']) ){
header("Location: sign-in.php");
exit;
}
$timeout = $timeout * 60;
$logout_redirect_url = "../../sign-in.php";

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
    <title>Resume | BNI Garut E-Office System</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="../../googlematerial_icon.css" rel="stylesheet">
    <link href="../../google_font.css" rel="stylesheet">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="../../plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="../../plugins/waitme/waitMe.css" rel="stylesheet" /> 

    <!-- Bootstrap Select Css -->
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
    <!-- Memasukan config untuk database PHP -->

    


    <?php 
    include '../../php/config.php';

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
            <p>Mohon Tunggu ya ... </p>
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
                <a class="navbar-brand" href="../../index.php">BNI Garut E-Office System</a>
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
                    <img src="../../images/user.jpg" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lucky Anggara</div>
                    <div class="email">K055292</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
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
                        <a href="index.php">
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
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    Surat
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="#">
                                        Surat Keluar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../pages/surat/surat_keluar_r.php">
                                        Surat Keluar Rahasia
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages/forms/basic-form-elements.html">
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
                                <a href="javascript:void(0);" class="menu-toggle"  class="active">
                                    Lain - Lain
                                </a>
                                <ul class="ml-menu"  class="active">
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
                                    <li  class="active">
                                        <a href="#">
                                        Resume
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

        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>                     

    <section class="content">
        <div class="container-fluid">
            <!-- SELECT UNIT -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                             RESUME KUNJUNGAN INSTANSI
                            </h2>
                        </div>
                        <form method="POST" id="form_input">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label for = "instansi">NAMA INSTANSI</label>
                                    <div class="form-group form-float">                                    
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="instansi" name ="instansi" placeholder="Nama Instansi yang dikunjungi" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for = "tanggal">TANGGAL KUNJUNGAN</label>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="tanggal" class="datepicker form-control" name="tanggal" placeholder="Tanggal Kunjungan" required>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label for = "pic">PIC</label>
                                    <div class="form-group form-float">                                    
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="pic" name ="pic" placeholder="Nama PIC Instansi yang dikunjungi" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for = "pic">No Telpon</label>
                                    <div class="form-group form-float">                                    
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="nohp" name ="nohp" placeholder="Kontak PIC Instansi yang dikunjungi" required>
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
                                                        <textarea rows="1" id="resume" name="resume" class="form-control no-resize auto-growth" placeholder="Silahkan Isi Hasil Resume, untuk menambah Paragraf Baru tekan 'ENTER' :D" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="row clearfix js-sweetalert">
                            <button type="button" id="simpan" data-type="success" class="btn bg-green btn-success waves ">
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
        <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TABEL REGISTER SURAT KELUAR
                            </h2>
                        </div>
                        <div class="body">
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
                                            <th></th>
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
                                            <th></th>
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
                                            <td>
                                            <a onclick ="view(<?php echo $data['no'];?>)" class="btn bg-purple waves-effect" data-toggle="modal" data-target="#largeModal">
                                            <i class="material-icons">search</i>
                                            </a>
                                            </td>                                       
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
            </div>
            <!-- #END# Exportable Table -->   
            
        </div>
    </section>

    <!-- Modal untuk menampilkan File -->
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            
                        </div>
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
                                                        <input type="text" id="nama_instansi" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>                                
                                    </div>
                                    <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nohp">No Hp</label>
                                            </div>
                                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nohp" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nohp">No Hp</label>
                                            </div>
                                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nohp" class="form-control" disabled>
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
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>                       
                                              
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-purple waves-effect" data-dismiss="modal"><i class="material-icons">print</i>Print</button>
                            <button type="button" class="btn bg-red waves-effect" data-dismiss="modal"><i class="material-icons">close</i>Close</button>
                        </div>
                    </div>
                </div>
            </div>

                                   
    <!-- Akhir Modal -->

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <script>

    $(document).ready(function(){
        $("#simpan").click(function(){
            var data = $('#form_input').serialize();
            $.ajax({
            type: 'POST',
            url: "../../php/resume/prosesresume.php",
            data: data,
            success: function() {
            $('#tabelupdate').load("../../php/resume/update.php");
            
            }
            });
        });
           
    });

    function view(no){
        $.ajax({
            type: 'POST',
            url: "../../php/resume/prosesview.php",
            data: 'noresume='+no,
            success: function() {
                console.log(no);
                $('.modal-body-2').load("../../php/resume/updateview.php");
            }
        });

    };
    </script>
    
    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="../../plugins/autosize/autosize.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="../../plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Moment Plugin Js -->
    <script src="../../plugins/momentjs/moment.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/basic-form-elements.js"></script>
    <script src="../../js/pages/forms/form-validation.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

    <script src="../../php/resume/dialog.js"></script>
    
    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>


    
</body>

</html>