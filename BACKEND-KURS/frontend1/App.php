<?php

/**
 * Ett skript som skapar en array med alla efternamn 
 * från namnapi.se
 */

class App
{

    public static $endpoint = "http://localhost/Uppgifter/Uppgift-3/backend1/";

    public static function main()
    {

        try {
            $array = self::getData();
          
            self::viewdata($array);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function getData()
    {

        $json = @file_get_contents(self::$endpoint);

        if (!$json)
            throw new Exception("Cannot access " . self::$endpoint);

        return json_decode($json, true);
    }

   
  
    public static function viewData($products)
    {
        $list = "<ul class='list-group'>";
        foreach ($products as $product) {
            $list .= "
                <li class='list-group-item'>
                
                <b> $product[Namn] </b><br><br>
                <b> Price: €$product[pris] </b><br> 
                
                </li>
                ";
        }
        $list .= "</ul>";

        echo $list;

        echo "<hr>";
    }
  

    
}

?>
