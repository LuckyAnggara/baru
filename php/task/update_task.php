
                    <?php
                    session_start();
                    include '../config.php';
                    $username = $_SESSION['username'];
                    $query_task = mysqli_query($koneksi,"SELECT count(no_task) FROM task WHERE username ='$username' and status_task = 0"); 
                    $query_task2 = mysqli_query($koneksi,"SELECT * FROM task WHERE username ='$username' and status_task = 0 LIMIT 5"); 
                    $data_task = mysqli_fetch_array($query_task); 
                    ?>   




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
                                    <li id="task" onclick="selesai(<?php echo $data_task['no_task'];?>)" data-toggle="tooltip" data-placement="left" title="Klik untuk Selesai" data-id="<?php echo $data_task['no_task']; ?>">
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