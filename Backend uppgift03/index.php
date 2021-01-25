<?php

header("Content-Type : application/json; charset=UTF-8");

include('productsarrays.php');
include('product.php');



$productinfo = array();


  
for ($i=0; $i < 10 ; $i++) { 
$product = new product(
    $produktNamn[(0,count($produktNamn)-1],
    $pris[0,count($pris)-1],
    $produktbeskrivning[0,count($produktbeskrivning)-1],
    $bild[0,count($bild)-1],
   
);
    
    array_push($productinfo, $product->toArray());
}   
   print_r($productinfo);
echo json_encode($product, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
 ?>

