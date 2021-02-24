<?php
require_once("database.php");


$stmt = $conn->prepare("SELECT * FROM messages");

$stmt->execute();

$result = $stmt->fetchAll();

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

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
           $id = $value['message_id'];
    
            $table .= "
                <tr>
                 <td>$value[contactperson_name]</td>
                 <td>$value[contactperson_email]</td>
                 <td>$value[contactperson_message]</td>
                 <td>
    
                   

                     <a href='delete.php?id=$value[message_id]' 
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
   
        <footer class="py-5 bg-dark">
            <div class="container">
              <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
            </div>
            <!-- /.container -->
          </footer>

    </footer>

</body>

</html>






