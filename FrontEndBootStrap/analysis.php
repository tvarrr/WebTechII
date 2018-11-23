<?php
	$obj = json_decode($_POST["myData"]);

	$output = passthru("python3 mentalHealthClustering.py ");

	$output = shell_exec($command);
	echo $output;
?>