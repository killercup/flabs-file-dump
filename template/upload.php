<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
	<link rel="stylesheet" type="text/css" href="/template/style.css" media="all" />
</head>
<body>
	
	<h1><span>Go ahead, throw your crappy images onto me</span></h1>
	
	<form id="upload" action="upload.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="max_file_size" value="20000000" />
		<input type="file" name="file" />
		<input type="submit" value="Upload" />
	</form>
	
	<ul id="footer">
		<li><a href="/manage/">Back</a></li>
		<?php include '_footer.php'; ?>
	</ul>
	
</body>
</html>