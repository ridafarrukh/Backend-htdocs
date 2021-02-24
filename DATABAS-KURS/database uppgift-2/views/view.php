<?php

class View
{

  public function viewHeader($title)
  {
    $html = <<<HTML
            <!doctype html>
            <html lang="sv">
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
              <a class="navbar-brand" href="index.php">$title</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  
                  
                  <li class="nav-item">
                    <a class="nav-link" href="?showContactForm">Contact</a>
                  </li>
                  <li>
        
                    <a class="nav-link" href="?showAllProducts">Products</a>
                  </li>
                      
                    </div>
                  </li>
                 
                  
                </ul>
              </div>
            </div>
          </nav>
        HTML;

    echo $html;
  }

  public function viewFirstPage()
  {

    $html = <<<HTML
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
                    <h4>"Fashion is the armor to survive the reality of everyday life."</h4>
                  <p>Bill Cunningham</p>
                  </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('views/modern/images/pexels-photo-336372.jpeg')">
                  <div class="carousel-caption d-md-block">
                    <h3>"Fashions fade, style is eternal."</h3>
                    <p>Yves Saint Laurent</p>
                  </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('views/modern/images/shopping-mall-1316787_1280.webp')">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>"In difficult times, fashion is always outrageous."</h3>
                    <p>Elsa Schiaparelli</p>
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
          <br>
          <br>
          <hr>
          
        
        HTML;

    echo $html;
  }



  public function viewFooter()
  {
   

    $html = <<<HTML
            </div> <!-- row -->
            <!-- Footer -->
            <footer class="py-3 bg-dark">
              <div class="container">
                 <p class="m-0 text-center text-white">Copyright &copy; My Little Webshop 2021</p>
             </div>
            </footer>
            </body>
            </html>
        HTML;

    echo $html;
  }

  public function viewOneProduct($product)
  {
    $html = <<<HTML
            <div class="row">
              <div class="col-md-5">
                    <img height="250" width= "200" style= "margin-left: 50px; margin-top: 30px" src="$product[product_image]"
                             alt="$product[product_name]">
              </div>
                        <div class="col-md-4 py-5">
                             <h4 style= "margin-bottom: 30px">$product[product_name]</h4>
                             <p><b>Price: $product[product_price] kr</b></p>
                              <p><b>Product description:</b> $product[product_description]</p>
                        </div>
            </div>
        HTML;
    echo $html;
  }

  public function viewAllProducts($product)
  {
    foreach ($product as $key => $product) {
      $this->viewOneProduct($product);
      $html = <<<HTML
        <div class="col-md-7">
        <h5 style= "margin-bottom: 30px; margin-left: 60px; text-align:right">
        <a href="?id=$product[product_id]">Buy this product</a></h5>
        </div>
        <hr>       
        
        HTML;

      echo $html;
    }
  }

  public function viewContactForm()
  {
    $html = <<<HTML
      <body>
  <!-- Page Content -->
  <div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Contact</h1>
   
    <!-- Content Row -->
    <div class="row">
      <!-- Photo Column -->
      <div class="col-lg-4 mb-2"> <img src="views/modern/images/LG_Photo_01.jpg" width="120" height="150" ;alt="logo bild">
        <h4>ladan</h4></div>
        <div class= "col-lg-4 mb-2"><img src="views/modern/images/RW_photo_01.jpg" width="120" height="150" ;alt="logo bild">
        <h4>Rida</h4></div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>Contact Details</h3>
        <p>
          Tomtebodavägen 3A
          <br>171 65 Solna
          <br>
        </p>
        <p>
          <abbr title="Phone">P</abbr>: 070 4567890
        </p>
        <p>
          <abbr title="Email">E</abbr>:
          <a href="mailto:name@example.com">ladan.rida@nackademin.com
          </a>
        </p>
        <p>
          <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
        </p>
      </div>
    </div>
    <!-- /.row -->
    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Send us a Message</h3>
        <form action="#" method="post">
          <div class="control-group form-group">
            <div class="controls">
              <label>Full Name:</label>
              <input type="text" class="form-control" name="contactperson_name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Phone Number:</label>
              <input type="text" class="form-control" name="contactperson_tel" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email Address:</label>
              <input type="text" class="form-control" name="contactperson_email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Message:</label>
              <textarea rows="10" cols="100" class="form-control" name="contactperson_message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
         <!-- <div id="success"></div> -->
          <!-- For success/fail messages -->
         <!-- <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button> -->
         <input type="submit" class="form-control my-2 btn btn-lg btn-outline-success" 
                            value="Submit">
        </form>
       
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
HTML;

    echo $html;
  }


  public function viewOrderForm($product)
  {

    $html = <<<HTML
            <div class="col-md-6">
                <br><h3 class='text-center text-primary'>Order form</h3> <br>
                <h6>Complete the following form to finish your shopping: </h6>
                <form action="#" method="post">
                    <input type="hidden" name="product_id" 
                            value="$product[product_id]">
                                           
                    <input type="text" name="customer_name" required 
                            class="form-control form-control-lg my-2" 
                            placeholder="Type your name">
                    <input type="text" name="customer_tel" required 
                            class="form-control form-control-lg my-2" 
                            placeholder="Type your phone number">
                    <input type="text" name="customer_email" required 
                            class="form-control form-control-lg my-2" 
                            placeholder="Type your email address">
                    <input type="text" name="customer_address" required 
                            class="form-control form-control-lg my-2" 
                            placeholder="Type your delivery address">
                    <input type="submit" class="form-control my-2 btn btn-lg btn-outline-success" 
                            value="Place order">
                </form>
                
            <!-- col avslutas efter en alert -->
        HTML;

    echo $html;
  }

  public function viewSimpleConfirmMessage()
  {
    $this->printMessage(
      
      "
     
      <h4>Thank you for your order, it is on its way!</h4>
      ",
      "success"
      
      
      
    );
  }

  

  public function viewConfirmMessageText()
  {
    $this->printMessage(
      "<h4>Thank you for your message! We will get back to you as soon as possible.</h4>",
      "success"
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