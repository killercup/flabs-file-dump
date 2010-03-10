<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><? echo $filename ?></title>
	<link rel="stylesheet" type="text/css" href="/template/style.css" media="all" />
</head>
<body>
	
	<img src="<? echo $filepath ?>" alt="<? echo $filename ?>" />
	
	<h1><span><? echo $filename ?></span></h1>
	
	<ul id="footer">
		<li><time datetime="<? echo date("d. M y", $filedate) ?>" pubdate="pubdate"><? echo date("d. M y", $filedate) ?></time>
		<li id="share">
			Share
			<input type="text" name="share" value="&lt;a href=&quot;<? echo $fileurl; ?>&quot;&gt;&lt;img src=&quot;<? echo $previewurl ?>&quot; alt=&quot;<? echo $filename ?>&quot; /&gt;&lt;/a&gt;" />
		</li>
		<li id="flabs"><a href="/">&#x238B;</a> &mdash; <a href="http://flabs.org/">FLabs</a></li>
	</ul>
	
</body>
</html>