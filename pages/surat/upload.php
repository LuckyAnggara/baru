<?php
if (!empty($_FILES)) {
    $targetDir = "../../uploads/surat_keluar/";
    $fileName = $_FILES['file']['name'];
    $targetFile = $targetDir . $fileName;
    move_uploaded_file($_FILES['file']['tmp_name'], $targetFile);
}
?>