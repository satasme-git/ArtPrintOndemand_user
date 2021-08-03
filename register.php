<?php
//Developed by Thisara
session_start();
include('inc/conn.php');
require_once('inc/function.php');
?>
<?php
if (isset($_POST['submit'])){
    $errors = array();
                //Form validation parts
                $fName=$_POST['firstName'];
                $lName=$_POST['lastName'];
                $eMail=$_POST['email'];
                $mobileNo=$_POST['mobile'];
                $password=$_POST['password'];

    //checking required fields
    $required_field=array('firstName','lastName','email','mobile','password');
    $errors=array_merge($errors,check_req_fields($required_field));

    //checking max length
    $max_length=array('firstName'=>150,'lastName'=>150,'email'=>150,'mobile'=>20,'password'=>150);
    $errors=array_merge($errors,check_max_length($max_length));

    //checking email address
    if(!is_email($_POST['email'])){
        $errors[] = 'invalid email address';
    }

    //checking if email address already exists
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $sql="SELECT * FROM customer WHERE email_address='{$email}' LIMIT 1";
    $result_set=mysqli_query($conn,$sql);
    if($result_set){
        if(mysqli_num_rows($result_set)==1){
            $errors[]='email address already exists';
        }
    }
    //Add to database
    if(empty($errors)) {
        $fName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $eMail = mysqli_real_escape_string($conn, $_POST['email']);
        $mobileNo = mysqli_real_escape_string($conn, $_POST['mobile']);
        $hashedpassword = mysqli_real_escape_string($conn, $_POST['password']);
        $password = md5($hashedpassword);
        $addsql="INSERT INTO customer (first_name,last_name,email_address,password,contact_no) VALUES ('{$fName}','{$lName}','{$eMail}','{$password}','{$mobileNo}')";
        $result = mysqli_query($conn,$addsql);

        if ($result) {
            echo '<script>confirm("Registration has been Success"); window.location.href="login.php"</script>';


        } else {
            $errors[]='Failed to add the new recode';
        }
    }

}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./css/login.css">
    <!-- <link href="http://fonts.cdnfonts.com/css/segoe-ui-4" rel="stylesheet"> -->

    <!--font awesome icons-->
    <link href="./css/fontawesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Sign in</title>
</head>

<body>
    <div class="container sign_cont">
        <div class="row">
            <div class="col-md-6 signin_img">
                <img src="./img/login/sign.png" alt="">

            </div>
            <div class="col-md-6 signin_form">
                <img src="./img/Logo1.png">
                <h3>Welcome to ArtPrint</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque optio vel nam dicta,Atque optio vel
                    nam dicta</p>
                <h5>Sign Up</h5>
                <?php
        if(!empty($errors)){
            display_error($errors);
        }
    ?>
            <form class="form_fields" action="register.php" method="post">
                <div class="form-group form_inp">

                <input type="text" class="form-control inputctrl" name="firstName" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="First Name">

                </div>
                <div class="form-group form_inp">

                    <input type="text" class="form-control inputctrl" name="lastName" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Last Name">

                </div>
                <div class="form-group form_inp">

                    <input type="text" class="form-control inputctrl" name="mobile" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Contact Number">

                    </div>
                    <div class="form-group form_inp">

                        <input type="email" class="form-control inputctrl"name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">

                    </div>
                    <div class="form-group form_inp">

                        <input type="password" class="form-control inputctrl" name="password" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <!-- <div class="fpwlink">
                        <a href="#">Foget Password<a>
                    </div> -->
                    <div class="submitar">
                        <div class="form-check sign_checkbox">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label " for="exampleCheck1">Remember Me</label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success buttonsign">LOGIN</button>
                    </div>
            </form>
            <p class="not_reg">Registered User ?<a href="login.php" >Login</a></p>
            <div class="separator">Or Sign In With Social Media</div>
            

            </div>
            
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
