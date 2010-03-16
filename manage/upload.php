<?php


// if thre is no upload, let the user make one!
if ($_FILES['file']['tmp_name'] == ''):
	include '../template/upload.php';

// if there is an upload, save it.
else:
	move_uploaded_file($_FILES['file']['tmp_name'], "../files/".basename($_FILES['file']['name']));
	Header("HTTP/1.1 301 Moved Permanently");
	Header("Location: http://".$_SERVER['SERVER_NAME']."/".rawurlencode($_FILES['file']['name']));

endif;

?>