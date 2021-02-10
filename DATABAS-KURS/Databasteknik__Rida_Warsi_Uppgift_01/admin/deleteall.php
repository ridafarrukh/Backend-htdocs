<?php

require_once("database.php");



$stmt = $conn->prepare("SELECT * FROM contacts");

$stmt->execute();

$result = $stmt->fetchAll();


foreach($result as $key =>$value){
    $id = $value['id'];

    $sql = "DELETE FROM contacts WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $rowCount = $stmt->rowCount();

}

header('Location: index.php');

?>
