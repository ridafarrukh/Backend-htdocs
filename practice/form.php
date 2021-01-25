<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>


 
  
<?php

date_default_timezone_set("Europe/Stockholm");
 
 $dag = array("Monday" => "Måndag", "Tuesday" => "Tisdag", "Wednesday" => "onsdag", "Thursday" => "Torsdag", "Friday" => "Fredag", "Saturday" => "Lördag", "Sunday" => "Söndag");

 $manad = array("Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", "Augusti", "September", "Oktober", "November", "December");
 
 //$manad = array("January" => "Januari","february"=>"Februari","March"=>"Mars");
 echo "vecka".date("W") . $dag[date("l")] . " den " . date("j") . " " . $manad[date("n")-1] . date("Y"). " och klockan är " . date("H:i") . ".";
 
?>
</body>
</html>
