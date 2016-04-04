<?php

$TICK_PER_SEC = 1000000;
$ITERATION_COUNT = 1000;
$INPUT_DIR = __DIR__.'/../testResources/';
$OUTPUT_DIR = __DIR__.'/../testResults/';

$FILES = ['empty.jsrs', '10fields.jsrs', 'recursive.jsrs'];

echo "\n";
for ($i = 0; $i < 3; $i++) {
	$FILE = $FILES[$i];
	echo 'Iteration count: '.$ITERATION_COUNT."\n";
	echo 'File: '.$FILE."\n";
	require('performTest.php');
	echo "\n";
}

?>