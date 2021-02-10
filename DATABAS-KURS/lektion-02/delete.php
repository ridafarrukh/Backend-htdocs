<?php

require_once("header.php");
require_once("database.php");

$id = $_GET['id'];

$sql ="DELETE FROM contacts WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id',$id);
$stmt->execute();
$rowCount = $stmt->rowCount();

$message = "<div class = 'alert alert-danger' role='alert'>
                <p>$rowCount rad har raderats!</p>
                </div>";
echo $message;

require_once("footer.php");
