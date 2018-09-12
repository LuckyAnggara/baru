   <?php
    require '../function.php';
    $query = mysqli_query($koneksi,"SELECT * FROM postfeed JOIN users USING(username) ORDER BY no DESC LIMIT 5");
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
                            <?php } ?>
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Isi Komentarmu">
                            </div>  
                        </div>
                    </div>
            </div>
        </div>
            <?php } ?>
    </div>
</div>