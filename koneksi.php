<?php 

$dbhost = "localhost";
$dbname = "db1";
$dbuser = "root";
$dbpass = "";

$koneksi = new PDO ("mysql:host="  . $dbhost . ";
					dbname=" . $dbname . "",
					$dbuser, $dbpass);