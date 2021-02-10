<?php
require_once("database.php");

$stmt = $conn->prepare("SELECT * FROM contacts");
$stmt->execute();
$result = $stmt->fetchAll();


$table = "
  <table class = 'table table-hover'>
  <tr>
     <th>Namn</th>
     <th>Telefon</th>
     <th>Admin</th>
   </tr>
  ";
   foreach($result as $key =>$value){
       $id = $value['id'];

        $table .= "
            <tr>
             <td>$value[name]</td>
             <td>$value[tel]</td>
             <td>
               <a href = 'update.php?id=$value[id]'>Uppdatera</a> |
               <a href = 'delete.php?id=$value[id]'>Ta bort</a>
             </td>
            </tr>

        ";
    }
$table .= "</table>";
echo $table;