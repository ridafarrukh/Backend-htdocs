<?php
$server = "localhost";
$dbName = "contactinfo";
$dbUser = "root";
$dbPass = "root";
$db_DSN = "mysql:dbname=$dbName;host =$server;charset =UTF8";

try{
    $conn = new PDO($db_DSN, $dbUser, $dbPass);
   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "<p>connection failed :" . $e->getMessage()."</p>";
    exit(1);
}












?>