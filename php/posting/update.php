   <?php
    require '../function.php';
    $query = mysqli_query($koneksi,"SELECT * FROM postfeed JOIN users USING(username) ORDER BY no DESC LIMIT 5");
    ?>                     
                        <div class="body" id="postingfeed">
                            <?php while ($data = mysqli_fetch_array($query)) { ?>
                                <div class="card">
                                    <div class="body">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="images/profile/<?php echo $data['username'];?>.png" width="64" height="64">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h1 class="media-heading"><?php echo $data['nama'];?></h1>
                                            <?php echo $data['text'];?>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            <?php } ?>
                        </div>