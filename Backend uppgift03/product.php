<?php


class product
{
    /**
     * Instansvariabler
     */
    private $produktNamn;
    private $pris;
    private $produktbeskrivning;
    private $bild;
    
    /**
     * Konstruktor
     */
    public function __construct($produktNamn, $pris, $produktbeskrivning,$bild)
    {
        $this->produktNamn = $produktNamn;
        $this->pris = $pris;
        $this->produktbeskrivning = $produktbeskrivning;
        $this->bild=$bild;
        
    }
    public function toArray()
    {
        $array = array(
            "Namn"  => $this->produktNamn,
            "pris"   => $this->pris,
            "produktbeskrivning" => $this->produktbeskrivning,
            "bild"=>$this->bild,
           
        );

         //print_r($array);
        
        return $array;
    }
}

?>