<?php

$errMsg = "";
$db = "zorg";
$host = "localhost";
$username = "Daveke7";
$password = "G0W-Awesome";
$db = new PDO("mysql:dbname=$db;host=$host", $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
