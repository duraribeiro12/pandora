<?php 
	session_start(); 
	session_destroy(); 
	header("Location: http://localhost/pandora/index.com"); 
	exit;
?>