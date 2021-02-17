<?php

require_once("database.php");
class product
{
    /**
     * Instansvariabler
     */
    private $product_name;
    private $product_price;
    private $product_description;
    private $product_image;
    
    /**
     * Konstruktor
     */
    public function __construct($product_name, $product_price, $product_description,$product_image)
    {
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->product_description = $product_description;
        $this->product_image=$product_image;
        
    }
    public function toArray()
    {
        $array = array(
            "product_name"  => $this->product_name,
            "product_price"   => $this->product_price,
            "product_description" => $this->product_description,
            "product_image"=>$product_image,
           
        );

         print_r($array);
        
        return $array;
    }
}

?>