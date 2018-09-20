<?php
if(is_array($_FILES)) {
	if(is_uploaded_file($_FILES['fileUpload']['tmp_name'])) {
		$sourcePath = $_FILES['fileUpload']['tmp_name'];
		$targetPath = "../../uploads/surat_keluar/".$_FILES['fileUpload']['name'];
		if(move_uploaded_file($sourcePath,$targetPath)) {
		}
	}
}