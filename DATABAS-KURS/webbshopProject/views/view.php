<?php

class View
{

    public function viewHeader($title)
    {
        $html = <<<HTML
        <!DOCTYPE html>
        <html lang="en">
        
        <head>
        
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">
        
          <title>Modern Business - Start Bootstrap Template</title>
        
          <!-- Bootstrap core CSS -->
          <link href="views/modern/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
          <!-- Custom styles for this template -->
          <link href="views/modern/css/modern-business.css" rel="stylesheet">
          <script src="views/modern/vendor/jquery/jquery.min.js"></script>
          <script src="views/modern/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        
        </head>
        
        <body>
        
          <!-- Navigation -->
          <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand" href="index.php">Webshop</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                  
                  
                      <li class="nav-item">
                      <a class="nav-link" href="views/modern/contact.php">Contact</a>
                      </li>
                  
                      
                      
                    </ul>
                 
                 
                  
                </div>
            </div>
          </nav>
        
          <header>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('views/modern/images/pexels-photo-3965551.jpeg' )">
                
                  <div class="carousel-caption d-none d-md-block">
                    <h3>First Slide</h3>
                    <p>This is a description for the first slide.</p>
                  </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('views/modern/images/pexels-photo-336372.jpeg')">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>Second Slide</h3>
                    <p>This is a description for the second slide.</p>
                  </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('views/modern/images/shopping-mall-1316787_1280.webp')">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>Third Slide</h3>
                    <p>This is a description for the third slide.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </header>
          <div class = "container">
            <div class = "row">
                <div class = "col-lg-8 col-md-10 mx-auto my-4">  
          
        
        HTML;

        echo $html;
    }
       
     
   
       

       
    public function viewFooter()
    {
           
            $html = <<<HTML
            <!-- Footer -->
            <footer class="py-3 bg-dark">
              <div class="container">
                 <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
              </div>
            </footer>
            HTML;
            echo $html;
   
    
    }


    public function viewOneProduct($product)
    {
           $html = <<<HTML
              <div class='post-preview'>
                 <h2 class='post-title'>
                     $product[product_name]
                 </h2>
                   <a href = '$product[product_image]' data-title='$product[product_name]'>
                     <img height="250"
                      src='$product[product_image]'
                      alt='$product[product_name]'
                     >
                   </a>
             
                   <div class='post-subtitle'>
                     <b> Price : </b> €$product[product_price] 
                   </div>
                   <div class='post-subtitle'>
                       <b> Description:</b> $product[product_description]
                   </div>
             </div>
              <div>
                  <input type="submit" class="form-control my-2 btn btn-lg btn-outline-success" 
                          value="Place order">
              </div>
            HTML;
              echo $html;

           
            
    }
                

           
          
                  
              
           


                     
                 
         
                 
            
        
           
    
    
    public function viewAllProducts($product)
    {
            foreach ($product as $key => $product) {
                $this->viewOneProduct($product);
            }
    }
    
    
    
  


    

   





    public function viewOrderForm($product)
    {

        $html = <<<HTML
            <div class="col-md-6">
                <h3 class='text-center text-primary'>Order form</h3>
            
                <form action="#" method="post">
                    <input type="hidden" name="product_id" 
                            value="$product[product_id]">
                    <input type="number" name="customer_id" required 
                            class="form-control form-control-lg my-2" 
                            placeholder="Type your customer number">
                
                    <input type="submit" class="form-control my-2 btn btn-lg btn-outline-success" 
                            value="Place order">
                </form>
                
            <!-- col avslutas efter en alert -->

        HTML;

        echo $html;
    }

    public function viewConfirmMessage($customer, $lastInsertId)
    {
        $this->printMessage(
            "<h4>Thanks $customer[customer_name] !</h4>
            <p>You will receive your order at your given address:</p>
            <p>$customer[customer_address]</p>
            <p>Your order number is $lastInsertId </p>
            ",
            "success"
        );
    }

    public function viewErrorMessage($customer_id)
    {
        $this->printMessage(
            "<h4>Customer number $customer_id does not exist in our customer records!</h4>
                <h5>Contact customer service</h5>
                ",
            "warning"
        );
    }

    /**
     * En funktion som skriver ut ett felmeddelande
     * $messageType enligt Bootstrap Alerts
     * https://getbootstrap.com/docs/5.0/components/alerts/
     */
    public function printMessage($message, $messageType = "danger")
    {
        $html = <<< HTML
            <div class="my-2 alert alert-$messageType">
                $message
            </div>
            </div> <!-- col  the end of the order form -->

        HTML;

        echo $html;
    }
}
?>