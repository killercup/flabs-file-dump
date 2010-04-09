<?php
/*
 * Gimme an awesome archive!
 */

// all file names in an array.
$files = glob('../files/*');

// sort by creation date
array_multisort(
	array_map('filemtime', $files),
	SORT_NUMERIC,
	SORT_DESC,
	$files
);

include '../template/archive.php';

?>