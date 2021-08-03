<?php

if(isset($_POST['submit'])){
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $to      = 'cgumsdemo@gmail.com';
            $user_email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['comment'];
            $headers = 'From: senturatechnologies@gmail.com' . "\r\n" .
                'Reply-To: '."$user_email"."\r\n" .
                'X-Mailer: PHP/' . phpversion();

            $send_email= mail($to,$subject,$message,$headers);
            if($send_email){
                $mess = "message sent successfully";
            }else{
                $mess = "message not sent";
            }
            //testing
            echo '<script type="text/javascript">';
            echo "alert('$mess');";
            echo 'window.location.href = "index.php";';
            echo '</script>';
        }else{
            //testing
            echo '<script type="text/javascript">';
            echo "alert('Invalid Email');";
            echo 'window.location.href = "index.php";';
            echo '</script>';
        }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link href="./css/fontawesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/contact.css">
    <title>Hello, world!</title>
  </head>
  <body>
    
    <h3 class="tital_con">Contact Us</h3>
    <div class="container contact_main">
        <div class="row">
            <div class="col-md-6 text_cont">
                <h4>Get in touch</h4>
                <p>You can leave a message using a contact form below.<br>All fields with are required.</p>

                <h4 class="connect_conta">Let's connect</h4>
                <p class="dis_conta">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                    veritatis et quasi architecto beatae vitae dicta...</p>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1 icon_cont">
                                <i class="fa fa-envelope-o 5x" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-11 dlts">
                                <h6 >info@Artprint.com.au</h6>
                            </div>
        
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1 icon_cont">
                                <i class="fa fa-phone 5x" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-11 dlts">
                                <h6 >1 (123) 456-7890</h6>
                            </div>
        
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1 icon_cont">
                                <i class="fa fa-map-marker 5x" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-11 dlts">
                                <h6 >No. 8, Victoria Avenue, Castle Hill NSW 2154, Australia</h6>
                            </div>
        
                        </div>
                    </div>
            </div>
            
            <div class="col-md-6 form_contus">
                <h4>Send us a message</h4>

              <form action="contactUs.php" method="post">
                    <div class="form-group">
                        <label for="inputAddress">First & Last Name</label>
                        <input type="text" class="form-control" id="inputAddress" name="name" placeholder="First & Last Name" required>
                      </div>
                    <div class="form-row">
                
                     
                        <label for="inputPassword4">Email address</label>
                        <input type="email" class="form-control" id="inputPassword4" name="email" placeholder="Email address" required>
            
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Subject</label>
                        <input type="text" class="form-control" id="inputAddress" name="subject" placeholder="Subject" Required>
                      </div>
                      <div class="form-group">
                        <label for="inputAddress">Message</label>
                        <textarea class="form-control" aria-label="With textarea" name="comment" required></textarea>
                      </div>
                   
                    <button type="submit" name="submit" class="btn bcontact">Contact Us Now!</button>
              </form>


            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>