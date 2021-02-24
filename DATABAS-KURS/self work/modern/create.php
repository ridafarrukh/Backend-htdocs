<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
     require_once("database.php");

     //echo "<pre>";
     //print_r($_POST);
     //echo "</pre>";

       $name =  $_POST['contactperson_name'];
       $email = $_POST['contactperson_email'];
       $message = $_POST['contactperson_message'];
       
       $stmt = $conn->prepare("INSERT INTO messages (contactperson_name,,contactperson_email,contactperson_address)
       VALUES (:contactperson_name,:contactperson_email,:contactperson_message);

       $stmt->bindParam(':name', $contactperson_name);
       $stmt->bindParam(':email', $contactperson_email);
       $stmt->bindParam(':message',$contactperson_message);

       $stmt->execute();
       $last_id = $conn->lastInsertId();
   


       

           
       
      
       echo "<h3>Tack  $name </h3>" ;
     
       echo  "<p> Här kommer en kopia på ditt meddelande</p>";
       echo "<hr>";
       echo $message;
    
   
       
       


    }

   








