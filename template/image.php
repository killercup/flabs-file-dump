<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><? echo $filename ?></title>
	<link rel="stylesheet" type="text/css" href="/template/style.css" media="all" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$("#image").click(function(){
			if ( $(this).css("max-width") != "auto" ) {
				$(this).css("max-width", "none");
			} else {
				$(this).css("max-width", "90%");
			}
		});
		$("#share").click(function(){
			$(this).addClass("vis");
			$("#share input").select().focus();
		});
	});
	</script>
</head>
<body>
	
	<img src="<? echo $filepath ?>" alt="<? echo $filename ?>" id="image" />
	
	<h1><a href="<?php echo $_SERVER["REQUEST_URI"] ?>"><? echo $filename ?></a></h1>
	
	<ul id="footer">
		<li><time datetime="<? echo date("d. M y", $filedate) ?>" pubdate="pubdate"><? echo date("d. M y", $filedate) ?></time>
		<li id="share">
			Share
			<input type="text" name="share" value="&lt;a href=&quot;<? echo $fileurl; ?>&quot;&gt;&lt;img src=&quot;<? echo $previewurl ?>&quot; alt=&quot;<? echo $filename ?>&quot; /&gt;&lt;/a&gt;" />
		</li>
		<?php include '_footer.php'; ?>
	</ul>
	
</body>
</html>