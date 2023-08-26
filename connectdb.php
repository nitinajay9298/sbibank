<?php

	$conn = mysqli_connect("localhost","root","","sbibank");

	if(!$conn){
		die("some error --> ".mysqli_connect_error());
	}

?>