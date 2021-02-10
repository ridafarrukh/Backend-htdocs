<?php
require_once("database.php");


$stmt = $conn->prepare("SELECT * FROM contacts");

$stmt->execute();

$result = $stmt->fetchAll();

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Alla Meddelanden</title>
</head>

<body class="container">
   
    <?php
    $table = "
      <table class ='table'>
      <thead class = 'table-dark'>
    
          <tr>
             <th>Namn</th>
             <th>Email</th>
             <th>meddelande</th>
             <th>    </th>
             
           </tr>
      
    
       </thead>   
      ";
       foreach($result as $key =>$value){
           $id = $value['id'];
    
            $table .= "
                <tr>
                 <td>$value[name]</td>
                 <td>$value[email]</td>
                 <td>$value[message]</td>
                 <td>
    
                   

                     <a href='delete.php?id=$value[id]' 
                     class='btn btn-sm btn-outline-danger'>
                     Ta bort
                     </a>
                 </td>
                 
             </a>
         
                  
                </tr>
              
            ";
        }
        $table .= "</table>";
        echo $table;
        ?>
    
        <a href='deleteall.php' 
            class='btn btn-sm btn-outline-danger'>
            Ta bort alla meddelanden 
        </a>
    
    <hr>
    <footer class="text-center">
        Copywrite &copy;
        <?php echo "Admin"." " . date('Y');
                ?>

    </footer>

</body>

</html>






