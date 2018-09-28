<?php
session_start();
require 'php/function.php';
if( !isset($_SESSION['login']) ){
header("Location: pages/sign-in/");
exit;
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome to | BNI Garut E-Office System</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="googlematerial_icon.css" rel="stylesheet">
    <link href="google_font.css" rel="stylesheet">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />

    
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
    <!-- php TASK -->
    <?php
    $username = $_SESSION['username'];
    $_SESSION['limit'] = 5;
    $limit = $_SESSION['limit'];
    $query_task = mysqli_query($koneksi,"SELECT count(no_task) FROM task WHERE username ='$username' and status_task = 0"); 
    $query_task2 = mysqli_query($koneksi,"SELECT * FROM task WHERE username ='$username' and status_task = 0 LIMIT '$limit'"); 
    $data_task = mysqli_fetch_array($query_task); 
    ?>         
    <!-- Top Bar -->

    <nav class="navbar" id="updatetask">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../2/">BNI GARUT E-OFFICE SYSTEM</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <?php if($data_task[0]>5){
                                ?>
                            <span class="label-count">5+</span>
                            <?php
                            }else{
                               ?> 
                            <span class="label-count"><?php echo $data_task[0];?></span>
                            <?php } ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">THINGS TO DO</li>
                            <li class="body">
                                <ul class="menu">
                                    <?php while ($data_task = mysqli_fetch_array($query_task2)) { 
                                        ?>      
                                    <li id="task" onclick="selesai(<?php echo $data_task['no_task'];?>);" data-toggle="tooltip" data-placement="left" title="Klik untuk Selesai" data-id="<?php echo $data_task['no_task']; ?>">
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <p><?php echo $data_task['judul']; ?> </p>
                                                <p>
                                                    <i class="material-icons">access_time</i> <?php echo $data_task['deadline']; ?>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <?php }?>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="pages/task" data-toggle="tooltip" data-placement="bottom" title="Klik untuk melihat semua Tugas">View All</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    

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
                    <a href="pages/profile/profile.php"><img src="source/profile/<?php echo $_SESSION['username'];?>.png" width="48" height="48" alt="User" /></a>
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
                            <li><a href="pages/profile/"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="pages/task/"><i class="material-icons">assignment_turned_in</i>Add Tasks</a></li>
                            <!-- <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li> -->
                            <li role="separator" class="divider"></li>
                            <li><a href="php\logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="../2/">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
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
                                        <a href="pages/surat/surat_keluar/">
                                        Surat Keluar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages/surat/surat_keluar_rahasia/">
                                        Surat Keluar Rahasia
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages/surat/surat_masuk/">
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
                                        Lain - lain
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
                                        <a href="pages/lain lain/resume-instansi.php">
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
                    <b>Version: </b> 1.1
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
<!--             <div class="block-header">
                <h2>DASHBOARD</h2>
            </div> -->

            
            <div class="row clearfix">
                <!-- STATUS -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="body">
                            <form id="posting">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="pages/profile/profile.php">
                                            <img class="media-object" src="source/profile/<?php echo $_SESSION['username'];?>.png" width="96" height="96">
                                        </a>
                                    </div>
                                    <div class="media-body">

                                        <div class="form-group">
                                        <div class="form-line">
                                        <textarea rows="4" name="post" id="post_text" class="form-control no-resize" placeholder="Apa yang anda pikirkan? Posting Sekarang"></textarea>

                                        </div >


                                        <div class="jsdemo-notification-button">
                                         <button type="button" id="post" class="btn btn-primary m-t-15 waves-effect pull-right" data-placement-from="top" data-placement-align="right"
                                            data-animate-enter="animated lightSpeedIn" data-animate-exit="animated lightSpeedOut"
                                            data-color-name="bg-black">
                                            POST
                                        </button>
                                        </div>


                                        <!-- <button type="button" id="post" class="btn btn-primary m-t-15 waves-effect pull-right" data-placement-from="top" data-placement-align="right"
                                            data-animate-enter="animated lightSpeedIn" data-animate-exit="animated lightSpeedOut"
                                            data-color-name="bg-black">POST</button> -->
                                        </div>

                                       

                                    </div>
                                    <!-- <div class="col-lg-offset-11 col-md-offset-11 col-sm-offset-11 col-xs-offset-9">
                                        <button type="button" id="post" class="btn btn-primary m-t-15 waves-effect">POST</button>
                                    </div> -->
                                </div>
                            </form>
                        </div>
                    </div>                     
                </div>
                <!-- AKHIR STATUS -->

                <!-- php feetching status update -->
                <?php
                $query = mysqli_query($koneksi,"SELECT * FROM postfeed JOIN users USING(username) WHERE status_delete = '0' ORDER BY no DESC LIMIT $limit");
                ?>
                <!-- Default Media -->
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    <div class="card" id="postingfeed">
                        <div class="header">
                            <h2>
                                NEWS FEEDS
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <a href="javascript:void(0);" data-toggle="cardloading" id="refresh" data-loading-effect="pulse" data-loading-color="green">
                                        <i class="material-icons">loop</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                            <div class="body" >
                                <?php while ($data = mysqli_fetch_array($query)) { 
                                    $nofeed = $data['no'];
                                    $query_comment = mysqli_query($koneksi,"SELECT * FROM comment_feed JOIN users USING(username) WHERE no_feed = '".$nofeed."' ORDER BY no DESC LIMIT 5 ");
                                    $count = mysqli_query($koneksi,"SELECT count(no) FROM comment_feed where no_feed = '".$nofeed."'"); // itung jumlah komen
                                    $count_comment = mysqli_fetch_array($count);
                                    ?>
                                    <div class="card">
                                        <div class="body">
                                        <div class="media">
                                            <div class="media-left">
                                                    <img class="media-object" src="source/profile/<?php echo $data['username'];?>.png" width="64" height="64">
                                            </div>
                                            <div class="media-body">
                                                <!-- Tombol Delete -->    
                                                <?php if($data['username']==$_SESSION['username']){
                                                    ?>
                                                    
                                                    <button onclick="deletePost(<?php echo $data['no'];?>);" class="btn bg-red btn-circle waves-effect waves-circle waves-float pull-right" data-toggle="tooltip" data-placement="left" title="Klik untuk Delete Post">
                                                    <i class="material-icons">delete</i>
                                                    </button>
                                                   
                                                <?php } ?>                                                
                                                <!-- Content -->
                                                <h1 class="media-heading"><?php echo $data['nama'];?></h1>
                                                <?php echo $data['text'];?>

                                            </div>

                                        </div>

                                        <a class="m-r-30" data-toggle="collapse" href="#<?php echo $nofeed;?>" aria-expanded="true" aria-controls="<?php echo $nofeed;?>">
                                            <span class="badge"><?php echo $count_comment[0]; ?></span> Comment 
                                        </a >
                                            <div class="collapse" id="<?php echo $nofeed;?>">
                                                <div class="well">
                                                    <?php while ($data_comment = mysqli_fetch_array($query_comment)) { ?>
                                                    <div class="media-body">
                                                    <div class="media-heading font-14 font-bold"><?php echo $data_comment['nama'];?></div>
                                                        <div class="font-10"><?php echo $data_comment['text'];?></div>
                                                    </div>
                                                </br>
                                                    <?php } 
                                                    $count ='comment'.$nofeed;
                                                    echo $count;
                                                    ?>
                                                    <div class="form-line">
                                                    <form id="post_comment<?php echo $nofeed;?>">
                                                    <input onclick="prosesComment(<?php echo $nofeed;?>)" type="text" name="<?php echo $nofeed;?>" id="<?php echo $nofeed;?>" class="form-control" placeholder="Isi Komentarmu">
                                                    </form>
                                                    </div>  
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="footer align-center">
                            <a onclick="jump();" name="load" id="load" role="button">
                                Load More ...
                            </a>
                        </div>
                    </div>
                </div>
                <!-- #END# Default Media -->
                <!-- Image With Captions -->
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="card">
                        <div class="header">
                            <h2>NEWS IMAGE FEED</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Open Gallery</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/image-gallery/11.jpg" />
                                    </div>
                                    <div class="item">
                                        <img src="images/image-gallery/12.jpg" />
                                    </div>
                                    <div class="item">
                                        <img src="images/image-gallery/19.jpg" />
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# With Captions -->
                <!-- Latest Social Trends -->
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="card">
                        <div class="body bg-cyan">
                            <div class="m-b--35 font-bold">NEWS INFO</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    Tidak Mengikuti Morn Brief Kena Denda
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                                <li>
                                    Oktober Bpk Jokowi ke Garut
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                                <li>Jangan Lupa 4DX</li>
                                <li>Kenakan Pakian Yang Rapih</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="card">
                        <div class="body bg-blue-grey">
                            <div class="font-bold m-b--35">ALL ABOUT PRODUCT</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    KUR
                                    
                                </li>
                                <li>
                                    Debit Asian Games
                                   
                                </li>   
                                <li>
                                    Debit Asian Games
                                    
                                </li>                              
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
            </div>
            <!-- Widgets -->
            <div class="row clearfix" id="load2">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW TASKS</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW TICKETS</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW COMMENTS</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW VISITORS</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
        </div>
    </section>

    <!-- Jquery Core Js -->

    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="plugins/autosize/autosize.js"></script>

    <!-- Wait Me Plugin Js -->
    <script src="plugins/waitme/waitMe.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>


    <!-- Custom Js -->
    

    <script src="js/admin.js"></script>
    <script src="js/pages/forms/basic-form-elements.js"></script>
    <script src="php/posting/sweetalert.js"></script>
    <script src="php/posting/proses.js"></script>
    <script src="php/posting/comment.js"></script>
    <script src="php/posting/update.js"></script>
    <script src="js/pages/ui/tooltips-popovers.js"></script>
    <script src="php/task/done.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>