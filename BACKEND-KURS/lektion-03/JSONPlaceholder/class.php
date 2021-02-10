<?php

class app{
    public static $endpoint ="https://jsonplaceholder.typicode.com/users";
    public static function main()
    {
        try{

            $array = self::getData();
             self::viewData($array);
            // print_r($array);
            
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
    public static function viewData($array){

        $table = "<table class='table'>";
        $table .= "<tr><th>Name</th><th>Email</th></tr>";
        foreach ($array as $key => $value) {
            $table .= "<tr>
                        <td>$value[name] </td>
                        <td>$value[email] </td>
                       </tr>";
        }
        $table .= "</table>";

        echo $table;
    }
}



