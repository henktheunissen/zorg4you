<?php

$errMsg = "";
$db = "Zorg4you";
$host = "localhost";
$username = "root";
$password = null;
$db = new PDO("mysql:dbname=$db;host=$host", $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
