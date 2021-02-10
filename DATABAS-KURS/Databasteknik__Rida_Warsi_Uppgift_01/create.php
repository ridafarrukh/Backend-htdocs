
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
     require_once("database.php");

     //echo "<pre>";
     //print_r($_POST);
     //echo "</pre>";

       $name =  $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];


        // Remove all illegal characters from email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // Validate e-mail
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) ===true) {
            echo("$email is not a valid email address");
            
        }
        else {

            $nameNew = filter_var($name, FILTER_SANITIZE_STRING);
           // echo $nameNew;
            $messageNew = filter_var($message, FILTER_SANITIZE_STRING);
            //echo $messageNew;

            $stmt = $conn->prepare("INSERT INTO contacts (name,email,message)
            VALUES (:name,:email,:message)");

            $stmt->bindParam(':name', $nameNew);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $messageNew);

            $stmt->execute();
            $last_id = $conn->lastInsertId();
        }
   
       
       


    }
?>
    <?php
    $name = $_POST['name'];
    $message = $_POST['message'];
    
    echo "<h3>Tack  $nameNew </h3>" ;
  
    echo  "<p> Här kommer en kopia på ditt meddelande</p>";
    echo "<hr>";
    echo $messageNew;
   ?>








