<?php
class App
{
    public static $endpoint = "http://localhost/Uppgifter/Uppgift-03/Backend/";
    public static function main()
    {
        try {
            $array = self::getData();
            self::viewData($array);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function getData()
    {
        $json = @file_get_contents(self::$endpoint);

        if (!$json) {
            throw new Exception("
                <div class='alert alert-danger' role='alert'>
                    Problem med att hämta infomration just nu!
                </div>
            ");
        }
        return json_decode($json, true);
    }

    public static function viewData($products)
    {
       $template = "";
        foreach($products as $product){

         
         $template .= "
         <div class='post-preview'>
             <h2 class='post-title'>
                 $product[name]
             </h2>
             <img height = 250 
                 src='$product[image]'
                 alt='$product[name]'
                 class = 'rounded-circle'
                 >
             <div class='post-subtitle'>
               Price : <b> $product[price] </b>
             </div>
     
             <div class='post-subtitle'>
                $product[description]
             </div>
             <div class='post-subtitle'>
               Quantity: <b> $product[quantity] </b>
             </div>
     
             
         </div>
         <hr>";
        }  
    
        echo $template;
    }


}

?>