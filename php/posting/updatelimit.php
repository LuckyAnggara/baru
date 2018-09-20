<?php
    session_start();
    require '../config.php';

    if($_SESSION['limit'] == 5){
        $_SESSION['limit'] = $_SESSION['limit'] + 5;
    }else{
        $_SESSION['limit'] = $_SESSION['limit'] + 5;
    }
    $limit = $_SESSION['limit'];
    $query = mysqli_query($koneksi,"SELECT * FROM postfeed JOIN users USING(username) WHERE status_delete = '0' ORDER BY no DESC LIMIT $limit")
    ?>
<!-- Default Media -->

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
                            <a name="load" id="load" href="javascript:void(0);">
                                Load More ...
                            </a>
                        </div>
                    </div>

                <!-- #END# Default Media -->

<!-- SweetAlert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>
    <script src="php/posting/sweetalert.js"></script>
    <script src="php/posting/comment.js"></script>
    <script src="php/posting/update.js"></script>
