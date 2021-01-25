

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
    <style>
  
input[type=text] {
  width:25%;
  padding: 8px 12px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid red;
  border-radius: 4px;
} 

input[type=submit] {
  background-color:red;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 10px 6px;
  cursor: pointer;
  border-radius:2px;
}
    </style>
  
</head>
<body>
<?php
  // Del-1
  // Vecka 01 - Måndag den 11 januari 2021 kl. 13:00
  
 date_default_timezone_set("Europe/Stockholm");
 $dag = array("Monday" => "Måndag", "Tuesday" => "Tisdag", "Wednesday" => "Onsdag", "Thursday" => "Torsdag", "Friday" => "Fredag", "Saturday" => "Lördag", "Sunday" => "Söndag");
 $manad = array("Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", "Augusti", "September", "Oktober", "November", "December");

 ?>
<h1><?php echo "Vecka". " ".date("W") ."-"." ". $dag[date("l")] . " den " . date("j") . " " . $manad[date("n")-1] ." ". date("Y")." ". "kl. " . date("H:i") ;?></h1>
 
 <hr>
  
<?php
  // Del-2
 // define variables and set to empty values
 $Firstname = "";
 $Lastname  = "";
 $Name1Err = "";
 $Name2Err = "";
 $LengthErr= "";
 
 $Firstname = $_POST['Firstname'] ?? "";
 $Lastname = $_POST['Lastname'] ?? "";
 
 if($_SERVER['REQUEST_METHOD']=="POST"){

  function validate(&$input,&$NameErr){
    // Förnamnet eller efternamnet får inte innehålla siffor.
        if (!preg_match("/^([^0-9]+)*$/", $input)) {
            $NameErr = "Du får inte använda siffror";
        } 
    // Ta bort alla blanka tecken.
    // Byt ut ä och å mot a.
    // Byt ut ö mot o.
    // Byt ut alla stora bokstäver till små.     
        else {
            $input=  str_replace(['å', 'ä'], "a", "$input");
            $input=  str_replace("ö", "o", "$input");
            $input=  str_replace(" ", "", "$input");
            $input = strtolower($input);
        }
    }   

    function validateLength($input1,$input2,&$NameErr){
        
            if(strlen($input1.$input2) >20){
                    $NameErr = "Förnamn och Efternamn tillsammans kan inte vara längre än 20 tecken.";
             } 
    }   

    validate($Firstname,$Name1Err);
    validate($Lastname,$Name2Err);
    validateLength($Firstname,$Lastname,$LengthErr);
  
}
    
    function print_array($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }   
    print_array($_POST);
?>
 <hr>
 <br>
 <br>


     
  <form method ="POST" action ="#" >
    <div>

    <label for="firstname">FirstName:</label><br>
    <input type="text" name="Firstname" >
  <span class="error">* <?php echo $Name1Err;?></span>
    </div>
  
   <div>
    <label for="Lastname">Lastname:</label><br>
    <input type="text" name="Lastname"  >
    <span class = "error">* <?php echo $Name2Err;?></span>
   </div>

   <div>
   <p >* <?php echo $LengthErr;?></p>
   </div>
    
    <input type="submit" value="submit">
    </div>
 </form>

    <?php
    if($Name1Err === "" && $Name2Err === "" && $LengthErr === "") {

      // visa e-post under formuläret. 
        echo "<h1>--- E-postadress ---</h1>";
      // echo "E-post:  ". $Firstname.".". $Lastname."@yh.nackademin.se";
      echo "<h2>  <a href = # > ". $Firstname.".". $Lastname."@yh.nackademin.se</a></h2>";
    } 
    ?>
 </body>
 </html>
  
     
   
  
   
 

   
      
 


    
        
   
    
      
    
       
     

     
    
 
    
     

    
    
    

    



  
  