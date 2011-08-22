<?php

function is_dev() {
	return isset($_GET['dev']) || isset($_COOKIE['dev']);
}

function json_headers() {
	header('Content-type: application/json');
}

?>