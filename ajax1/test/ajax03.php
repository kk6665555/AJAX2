<?php
	$upload = $_FILES['uploadfile'];
	if($upload['error'] == 0 ){
		copy($upload['tmp_name'],"upload/{$upload['name']}");
		echo 'upload OK';
	}
?>