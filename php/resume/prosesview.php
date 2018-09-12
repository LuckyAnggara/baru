 <?php
    session_start();
        include 'config.php';
        $_SESSION['noresume']= $_POST['noresume'];
        $_POST['noresume'] = "";
 ?>

