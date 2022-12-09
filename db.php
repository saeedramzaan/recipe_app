<?php

$servername = "localhost";
$username = "root";
$password = "mysql123";
$dbname = "cart_app";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);