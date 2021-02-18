<?php

require_once("database.php");


$stmt = $conn->prepare("SELECT * FROM products");

$stmt->execute();

$result = $stmt->fetchAll();
echo "<pre>";
 print_r($result);
echo"</pre>";


public static function viewData($products)
{
   $template = "";
    foreach($products as $product){

     
     $template .= "
     <div class='post-preview'>
         <h2 class='post-title'>
             $product[product_name]
         </h2>
         <a href = '$product[product_image]'data-title='$product[product_name]'>
         <img height = 250 
             src='$product[product_image]'
             alt='$product[product_name]'
             class = 'rounded-circle'
             >
          </a>
         <div class='post-subtitle'>
           Price : <b> €$product[product_price] </b>
         </div>
 
         <div class='post-subtitle'>
           <b> Description:</b> $product[product_description]
         </div>
         
         
     </div>
     <hr>";
    }  

    echo $template;
}

?>