<?php

header("Content-Type : application/json; charset=UTF-8");

include('productsarrays.php');
include('product.php');



$productinfo = array();


  
for ($i=0; $i < 10 ; $i++) { 
$product = new product(
    $produktNamn[$i],
    $pris[$i],
    $produktbeskrivning[$i],
    $bild[$i],
   
);
    
    array_push($productinfo, $product->toArray());
}   
   print_r($productinfo);
echo json_encode($product, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
 ?>

