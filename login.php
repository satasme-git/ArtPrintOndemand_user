<?php
//Developed by Thisara
session_start();
include('inc/conn.php');
require_once('inc/function.php');
?>
<?php
if(isset($_POST['submit'] )){
    $errors =array();
         //check if the user name and password has  been entered
    if(!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1){
        $errors[]='User name is incorrect ';

    }
    if(!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1){
        $errors[]='Password  is incorrect ';
    }
    //check if there  are any errors in the forms
    if(empty($errors)) {
        $username = mysqli_real_escape_string($conn, $_POST['email']);
        $hashpassword = mysqli_real_escape_string($conn, $_POST['password']);
        $password = md5($hashpassword);

        $query = mysqli_query($conn, "select * from customer where email_address='$username' && password='$password'");

        if (mysqli_num_rows($query) == 0) {
            $_SESSION['message'] = "Login Failed. User not Found!";
            $errors[]='Failed to login';
            header('location:login.php?err=login failed');
        } else {
            $row = mysqli_fetch_array($query);

            if (isset($_POST['remember'])) {
                //set up cookie
                setcookie("user", $row['email_address'], time() + (86400 * 30));
                setcookie("pass", $row['password'], time() + (86400 * 30));
            }

            $_SESSION["loginUser"] = $row['email_address'];
            $_SESSION['id'] = $row['cid'];
            header('location:cart.php?msg=loged');
        }
    }
}
else{
//    header('location:index.php');


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
                <h3>Welcome Back!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque optio vel nam dicta,Atque optio vel
                    nam dicta</p>
                <h5>Sign in</h5>
                
                <?php
								  if(!empty($errors)){
                                    display_error($errors);
                                }
							?>
                            
                <form class="form_fields" action="login.php" method="post">
                    <div class="form-group form_inp">

                        <input type="email"name="email" class="form-control inputctrl" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">

                    </div>
                    <div class="form-group form_inp">

                        <input type="password" name="password" class="form-control inputctrl" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <!-- <div class="fpwlink">
                        <a href="#">Foget Password<a>
                    </div> -->
                    <div class="submitar">
                        <div class="form-check sign_checkbox">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label " for="exampleCheck1">Remember Me</label>
                        </div>
                        <button type="submit"  name="submit" class="btn btn-success buttonsign">LOGIN</button>
                    </div>
                </form>
            <p class="not_reg">Not Registered yet ? <a href="register.php" >Create an Account</a></p>
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

