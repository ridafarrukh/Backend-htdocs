<?php

class App
{
    public static $endpoint = "https://fakestoreapi.com/products";
    public static function main($itemType)
    {
        if ($itemType) {
            self::$endpoint .= "/category/" . $itemType;
        }

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
                   Cannot access data just nu!
                </div>
            ");
        }
        return json_decode($json, true);
    }

    public static function viewData($allproduct)
    {
        $template = "";

        foreach ($allproduct as $key => $items) {
            $template .= "
            <div class='post-preview'>
                <h2 class='post-title'>
                    $items[title]
                </h2>
                <img height = 250
                    src='$items[image]'
                    alt='$items[title]'
                    >
                <div class='post-subtitle'>
                  Price : <b> $items[price] </b>
                </div>
        
                <div class='post-subtitle'>
                   $items[description]
                </div>
        
                
            </div>
            <hr>";
        }

        echo $template;
       
    }
}