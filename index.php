<?php
	// Require https
	if ($_SERVER['HTTPS'] != "on") {
	$url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	header("Location: $url");
	exit;
	}
  include_once("index.html");
?>