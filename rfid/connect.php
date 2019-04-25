<?php
date_default_timezone_set('Asia/Kolkata');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rfid";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage();
    }
?>
