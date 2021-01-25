


<?php

// 1. Skapa en HTTP-header med innehållstypen JSON (Content-Type).
header("Content-Type: application/json; charset=UTF-8");

// 2. Skapa två PHP-arrayer för att lagra förnamn och efternamn.
$productNames = ["Träningshoodie","Puff Top","Klänning Janni","Tiger of Sweden Jeans","Only Kappa","Sneakers Air soft","kappa Melina","Boots Olivia","TräningsLinne","Byxor Lorelai"];
$price = ["799","299","599","1399","479","279","489","1300","174","209"];

// 3. Skapa 10 olika namn (förnamn och efternamn)
//    och spara dessa i en ny array som heter names.

$names = array();


  
for ($i=0; $i < 10 ; $i++) { 
  
    $name = array(
        "productNames" => $productNames[count($productNames)-3],
        "price" => $price[(count($price)-3)],
    );
    
    array_push($names, $name);
}

print_r($names);



 //4. Konvertera PHP-arrayen till en JSON-string.
 $json = json_encode($names, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

// Skicka JSON till klienten.
//echo $json;


?>