<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Archive.</title>
	<link rel="stylesheet" type="text/css" href="/template/style.css" media="all" />
</head>
<body>
	
	<h1><span>Hello. I'm your archive.</span></h1>
	
	<ul id="archive">
	<?php $fdate0 = "";
	foreach($files as $f) {
		$fdate = date('M y', filemtime("$f"));
		$fname = str_replace('../files/', '', $f);
		
		if (!preg_match("/\-preview\.jpg$/", $f)):
		
		$fimage = (preg_match("/\.(png|jpg|jpeg|gif|tif|tiff)$/", $f));
		?>
		
		<?php /* if new month but not first, close previous month */ 
			if(($fdate != $fdate0) and ($fdate0 != "")) { ?>
			</ul>
		</li>
		<?php }?>
		
		<?php if($fdate != $fdate0) { ?>
		<li class="month">
			<h2><?php echo $fdate; ?></h2>
			<ul>
		<?php } /* if new month */ ?>
				
				<?php if ($fimage == 1) { ?>
				<li class="image">
					<a href="/<?php echo rawurlencode($fname); ?>" title="<?php echo $fdate; ?> -- <?php echo $fname; ?>">
						<img src="<?php echo $f; ?>-preview.jpg" alt="<?php echo $fname; ?>" />
					</a>
				</li>
				
				<?php } else { ?>
				<li class="file">
					<a href="/<?php echo rawurlencode($fname); ?>"><?php echo $fname; ?></a>
				</li>
				<?php } ?>
		
		<?php $fdate0 = $fdate;
		endif;
	} /* foreach */ ?>
	</ul>
	
	<ul id="footer">
		<li id="flabs"><a href="/">&#x238B;</a> &mdash; <a href="http://flabs.org/">FLabs</a></li>
	</ul>
	
</body>
</html>