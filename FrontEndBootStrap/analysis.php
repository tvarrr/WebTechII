<?php
	$obj = json_decode($_POST["myData"]);

	$output = passthru("python3 mentalHealthClustering.py ".$obj);

	$output = shell_exec($command);
	echo $output;
?>