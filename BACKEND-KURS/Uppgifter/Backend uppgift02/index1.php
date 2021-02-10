<?php 

include 'App1.php';

$itemType = $_GET['filter'] ?? "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My WEBSHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
    
    .namn {
            font-family: 'fantasy',sarif;
            text-align:center;
            font-size: 4em;
        }
        hr.new3 {
          border-top: 5px solid red;
        }
    </style>
</head>

<body>
<div class = "container">
  <div class = "row">

    <div class = "col-lg-8 col-md-10 mx-auto">
      <h1 class = "namn">MY WEBSHOP</h1>

      <div class="text-center">
         <a href="?filter=women clothing" class="btn btn-danger btn-lg " tabindex="-1" role="button" aria-disabled="true">Women clothing</a>
         <a href="?filter=men clothing" class="btn btn-danger btn-lg " tabindex="-1" role="button" aria-disabled="true">Men clothing</a>
         <a href="?filter=jewelery" class="btn btn-danger btn-lg " tabindex="-1" role="button" aria-disabled="true">Jewelery</a>
      </div>
       <hr class = "new3">
       <?php 
         App::main($itemType);
       ?>

    </div>
  </div>  
</div>
    
</body>

</html>




    

        
      
    

    
    