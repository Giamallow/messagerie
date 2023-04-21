<?php
	$username = $_POST['username'];
	$message = $_POST['message'];
	$fp = fopen('messages.txt', 'a');
	fwrite($fp, "<p>" . $username . ": " . $message . "</p>\n");
	fclose($fp);
?>
