<?php

$servername = "localhost:3307";
$user = "root";
$pwd="admin";
$db   = "xkcd_comic_db";

$con = new mysqli( $servername , $user, $pwd, $db );
if ($con->connect_errno) {
	die( 'Connection failed: ' . $con->connect_error );
}
