<?php
app::main();
class app{

    public static $endpoint ="https://fakestoreapi.com/products";
    public static function main()
    {
        try{

            $array = self::getData();
            //self::viewData($array);
            
            echo "<pre>";
            print_r($array);
            echo "</pre>";
            
            
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
    
    
    } 
    public static function viewData($array)
    {

        $table = "<table class='table'>";
        $table .= "<tr><th>Title</th><th>Price</th><th>Description</th></tr>";
        foreach ($array as $key => $value) {
            $table .= "<tr>
                        <td>$value[title] </td>
                        <td>$value[price] </td>
                        <td>$value[description] </td>
                       </tr>";
        }
        $table .= "</table>";

        echo $table;
    }
   
}
?>