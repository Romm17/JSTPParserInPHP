<?php

require_once('JSTP.php');

$json = file_get_contents($INPUT_DIR.$FILE);

$start_time = gettimeofday();
$json_encoded = '';
if ($json) {
    $parser = new Services_JSTP();
    for ($inner_index = 0; $inner_index < $ITERATION_COUNT; $inner_index++) {
	    $json_decoded = $parser->decode($json);
		if ($json_decoded) {
			$json_encoded = $parser->encode($json_decoded);
		} else {
			echo "Can not parse\n";
			break;
		}
	}
}
$end_time = gettimeofday();
$diff = ($end_time['sec']-$start_time['sec'])*$TICK_PER_SEC
	  + ($end_time['usec']-$start_time['usec']);
echo 'Working time: ';
echo($diff/$TICK_PER_SEC);
echo "\n";
file_put_contents($OUTPUT_DIR.$FILE, $json_encoded);
?>
