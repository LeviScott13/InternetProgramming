<?php
	$dbconnect = mysqli_connect("localhost", "tmangadz","Qwerty", "tmangadz");
	if(mysqli_connect_errno()) {
		echo "Connection failed:".mysqli_connect_error();
		exit;
	}

?>
