<?php
/*
 * Show me some crazy image.
 */

if ($_GET['f'] == "") {
	include 'template/start.php';
	exit;
}

$filename = $_GET['f'];
$filepath = "files/$filename";
$previewpath = "{$filepath}-preview.jpg";

if (!file_exists($filepath)) {
	header("HTTP/1.0 404 Not Found");
	include 'template/404.php';
	exit;
}

$filedate = filemtime($filepath);

include 'template/image.php';

/*
 * Thumbs up!
 */

require_once 'template/thumbs/ThumbLib.inc.php';

//try {
     $thumb = PhpThumbFactory::create($filepath);
     $thumb->adaptiveResize(75, 75)->save($previewpath, "jpg");
//} catch (Exception $e) {
//     exit;
//}

?>