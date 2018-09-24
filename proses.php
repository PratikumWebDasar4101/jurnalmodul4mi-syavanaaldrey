<?php

	$hobbi = $_POST['hobbi'];
	
	echo "hobbi Anda :";
	foreach ($hobbi as $key => $value) {
	echo "$value <br>";
	}
	print_r($hobbi);

	$file = $_FILES['dokumen'];
	$nama_file = $file['name'];
	$nama_tmp = $file['tmp_name'];
	$upload_dir = "upload/";
	move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
	echo "File berhasil diunggah. <br>"
?>
<img src="upload/<?php echo $nama_file; ?>">

