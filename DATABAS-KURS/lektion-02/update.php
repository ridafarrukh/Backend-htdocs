<?php
require_once("header.php");
require_once("Database.php");



if ($_SERVER["REQUEST_METHOD"] == "POST"){


   $id = $_POST['id'];
   $name = $_POST['name'];
   $tel = $_POST['tel'];

   $sql = "UPDATE contacts SET name = :name, tel = :tel WHERE id = :id";
   $stmt = $conn->prepare($sql);
   $stmt->bindParam(':id',$id);
   $stmt->bindParam(':name',$name);
   $stmt->bindParam(':tel',$tel);
   $stmt->execute();

   $rowCount = $stmt->rowCount();
   $message = "<div class = 'alert alert-success' role='alert'>
                <p>$rowCount rad har uppdaterads!</p>
                </div>";


    echo "<pre>";
     print_r($_POST);
    echo "</pre>";

}




$id = $_GET['id'];
echo "<h2>$id</h2>";

$stmt = $conn->prepare("SELECT * FROM contacts WHERE id = :id");
$stmt->bindParam(':id' , $id);
$stmt->execute();
$result = $stmt->fetch();

$name = $result['name'];
$tel  = $result['tel'];



// echo "<h2> $name </h2>";
 //echo "<h2> $tel </h2>";
?>

<form action "#" class="row" method="post">
        <fieldset>
            <div class="form-group">
                <label for="name" class = "form-label">Ange namn</label>
                <input  id ="name" type="text" class="form-control" name="name"  value="<?php echo $name;?>" >

            </div>
            <div class="form-group">
                <label for="tel">Ange Telefonnummer</label>
                <input id ="tel" type="text" class="form-control" name="tel" value="<?php echo $tel;?>">
            </div>
            <input type="submit" value = "Uppdatera" class="form-control btn btn-primary">
            <input type = "hidden" name = "id" value = "<?php echo $id;?>">
        </fieldset>

    </form>



 <br>
 <br>
<?php
if(isset($message))
echo $message;
require_once("footer.php");
?>










