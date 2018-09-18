<?php
    session_start();
    require '../function.php';
    $query = mysqli_query($koneksi,"SELECT * FROM postfeed JOIN users USING(username) WHERE status_delete = '0' ORDER BY no DESC LIMIT 5")
    ?>
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
                            <div class="body">
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
                                                    <img class="media-object" src="images/profile/<?php echo $data['username'];?>.png" width="64" height="64">
                                            </div>
                                            <div class="media-body">
                                                <!-- Tombol Delete -->    
                                                <?php if($data['username']==$_SESSION['username']){
                                                    ?>
                                                    <div class ="js-sweetalert">
                                                    <button href="javascript:void(0);" class="btn bg-red btn-circle waves-effect waves-circle waves-float pull-right" data-type="confirm" data-id="<?php echo $nofeed; ?>">
                                                    <i class="material-icons">delete</i>
                                                    </button>
                                                    </div>
                                                <?php } ?>                                                
                                                <!-- Content -->
                                                <h1 class="media-heading"><?php echo $data['nama'];?></h1>
                                                <?php echo $data['text'];?>

                                            </div>

                                        </div>

                                        <a class="m-r-30" data-toggle="collapse" href="#<?php echo $nofeed;?>" aria-expanded="true" aria-controls="<?php echo $nofeed;?>">
                                            Comment <span class="badge"><?php echo $count_comment[0]; ?></span>
                                        </a>
                                            <div class="collapse" id="<?php echo $nofeed;?>">
                                                <div class="well">
                                                    <?php while ($data_comment = mysqli_fetch_array($query_comment)) { ?>
                                                    <div class="media-body">
                                                    <div class="media-heading font-14 font-bold"><?php echo $data_comment['nama'];?></div>
                                                        <div class="font-10"><?php echo $data_comment['text'];?></div>
                                                    </div>
                                                </br>
                                                    <?php } 
                                                    $count = "comment".$nofeed;
                                                    echo $count;
                                                    ?>
                                                    <div class="form-line">
                                                    <form name="post_comment" id="post_comment">
                                                    <input type="text" name="<?php echo $count; ?>" id="<?php echo $count; ?>" data-id="<?php echo $nofeed; ?>" class="form-control" placeholder="Isi Komentarmu">
                                                    </form>
                                                    </div>  
                                                </div>

                                                <script type="text/javascript">
                                                        var nofeed= <?php echo json_encode($count); ?>;
                                                        var comment = "#"+nofeed;
                                                        
                                                        document.getElementById(nofeed).addEventListener('keydown', (event) => {

                                                        if (event.key == "Enter") {
                                                            event.preventDefault();
                                                            if(document.getElementById(nofeed).value ===""){
                                                                                                                        
                                                            }else{

                                                            var data = document.getElementById(nofeed).value;
                                                            var id = $(comment).data('id');
                                                                                                                        
                                                            $.ajax({
                                                            type: 'POST',
                                                            url: "php/posting/prosescomment.php",
                                                            data: {id:id, data:data},
                                                            success: function() {
                                                            console.log(nofeed);  
                                                            $('#postingfeed').load("php/posting/update.php");

                                                            document.getElementById(nofeed).value = "";
                                                            event.preventDefault();      
                                                            }
                                                            });
                                                        }                
                                                        }    
                                                    });
                                                </script>


                                            </div>


                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="footer align-center">
                            <a href="javascript:void(0);">
                                Load More ... 
                            </a>
                        </div>
                    </div>

<!-- SweetAlert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>
    <script src="php/posting/sweetalert.js"></script>
    <script src="php/posting/comment.js"></script>
    <script src="php/posting/update.js"></script>
