<?php

$mysqli = new mysqli('localhost', 'root', '', 'doggispet') or die(mysqli_error($mysqli));

if (isset($_POST['save'])){
	$name = 	$_POST['name'];
	$location = $_POST['location'];
	
	@mysqli->query("INSERT INTO crud (name, location) VALUES('$name','$location')") or
		die(mysqli->error);
}