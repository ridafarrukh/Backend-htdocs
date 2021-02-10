

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
     require_once("database.php");
       // echo "<pre>";
       // print_r($_POST);
       // echo "</pre>";

        $name = $_POST['name'];
        $tel = $_POST['tel'];

       //echo "Name: $name <br>";
       //echo "Tel: $tel";


       $stmt = $conn->prepare("INSERT INTO contacts (name, tel) VALUES(:name, :tel)");
       $stmt->bindParam(':name',$name) ;
       $stmt->bindParam(':tel',$tel) ;
       $stmt->execute();
       
       $last_id = $conn->lastInsertId();

       $message = "<div class = 'alert alert-success' role ='alert'>
                   <p>$name har sparats i databasen med id = $last_id</p>
                   </div>";
        

    }
    ?>
    <form action "#" class="row" method="post">
        <fieldset>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tel</label>
                <input type="text" class="form-control" name="tel" placeholder="Number">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>

    </form>



<br>
<br>
  <?php
  if(isset($message))
  echo $message;
  ?>









