<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Archive.</title>
	
	<link rel="stylesheet" type="text/css" href="/template/style.css" media="all" />
	
	<script type="text/javascript" src="template/js/jquery.js"></script>
	<script type="text/javascript" src="template/js/jquery.quicksand.js"></script>
	<script type="text/javascript" src="template/js/archive.js"></script>
	
</head>
<body>
	
	<h1><a href="<?php echo $_SERVER["REQUEST_URI"] ?>">Hello. I'm your archive.</a></h1>
	
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
					<p class="filename"><a href="/<?php echo rawurlencode($fname); ?>"><?php echo $fname; ?></a></p>
				</li>
				
				<?php } else { ?>
				<li class="file">
					<p class="filename"><a href="/<?php echo rawurlencode($fname); ?>"><?php echo $fname; ?></a></p>
				</li>
				<?php } ?>
		
		<?php $fdate0 = $fdate;
		endif;
	} /* foreach */ ?>
			</ul>
		</li>
		<br style="clear: both;" />
	</ul>
	
	<ul id="footer">
		<li><form action="/manage/"><input type="search" name="search" id="search" /></form></li>
		<?php include '_footer.php'; ?>
	</ul>
	
</body>
</html>