<?php

class app{

    public static $endpoint ="https://fakestoreapi.com/products";
    public static function main()
    {
        try{

            $array = self::getData();
            self::viewData($array);
            /*
            echo "<pre>";
            print_r($array);
            echo "</pre>";
            */
            
        }catch (Exception $e){
            echo $e->getmessage();
    
        }
    }

     public static function getData()
    {

     $json = @file_get_contents(self::$endpoint);
     if(!$json)
     throw new exception("cannot access ". self::$endpoint);
     return json_decode($json,true);
    
    
    } public static function viewData($array){
       
        echo "<h2>Price</h2>";
        $list = "<ul>";
        foreach ($array as $key => $value) {
        
                     
        $list .= " <li> $value[price] </li>";
                        
                     
        }
       
        $list .= "</ul>";
       

        echo $list;
    }
   
}