<?php
session_start();
require '../function.php';
if(is_array($_FILES)) {
	if(is_uploaded_file($_FILES['fileUpload']['tmp_name'])) {

		$file = $_FILES['fileUpload']['name']; // cek file nya
		$no = $_SESSION['no']; // cek nomor surat yang di binding untuk upload
		$extensi = pathinfo($file, PATHINFO_EXTENSION); // cek extensionnya
		$sql = mysqli_query($koneksi, "SELECT * FROM surat_keluar WHERE no_surat ='$no'");
		$data = mysqli_fetch_array($sql);

		$explode = explode("/",$data['output']);
		$hal = $data['hal'];
		$noprefix = $explode[0]."-".$explode[1]."-".$explode[2]."-".$explode[3];
		echo "$noprefix";
		//$namaFileBaru = $noprefix.".".$extensi;
		$namaFileBaru = $noprefix."-".$hal.".".$extensi;

		$sourcePath = $_FILES['fileUpload']['tmp_name'];
		$targetPath = "../../uploads/surat_keluar/".$namaFileBaru;

		if(($extensi=="pdf") && ($extensi=="jpg") && ($extensi=="jepg")){
		if(is_file("../../uploads/surat_keluar/".$data['lampiran'])){
			unlink("../../uploads/surat_keluar/".$data['lampiran']); // Hapus file foto sebelumnya yang ada di folder images
			move_uploaded_file($sourcePath,$targetPath);
				$sql = mysqli_query($koneksi,"UPDATE surat_keluar SET lampiran='$namaFileBaru' WHERE no_surat='$no'");
				echo "File Lama Didelete, Ganti File Baru";
		}else{
			move_uploaded_file($sourcePath,$targetPath);
				$sql = mysqli_query($koneksi,"UPDATE surat_keluar SET lampiran='$namaFileBaru' WHERE no_surat='$no'");
				echo "File Baru Uploaded";
			
		}
		}else{
		echo "FILE SALAH";
		}
	}
}
