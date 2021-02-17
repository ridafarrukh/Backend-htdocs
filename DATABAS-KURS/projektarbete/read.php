<?php
require_once("database.php");


$stmt = $conn->prepare("SELECT * FROM products");

$stmt->execute();

$result = $stmt->fetchAll();
echo "<pre>";
 print_r($result);
echo"</pre>";

?>
