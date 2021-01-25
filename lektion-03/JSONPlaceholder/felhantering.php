<?php
function getdata($url){
$json = @file_get_contents($url);
if(!$json)
    throw new exception("<p>cannot access $url</p>");
    return json_decode($json,true);


//echo $json;
}
function main(){

    $endpoint ="https://jsnplaceholder.typicode.com/users";
    try{

        $array = getdata($endpoint);
         print_r($array);
        
    }catch (Exception $e){
        echo $e->getmessage();

    }
} main();





