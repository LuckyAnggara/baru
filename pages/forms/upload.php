<?php
session_start();

if( !isset($_SESSION['login']) ){
header("Location: sign-in.php");
exit;
}


if (!empty($_FILES)) {
    $targetDir = "../../source/suratkeluar/".$_SESSION['username']."-";
    $fileName = $_FILES['file']['name'];
    $targetFile = $targetDir . $fileName;
    move_uploaded_file($_FILES['file']['tmp_name'], $targetFile);

}
?>