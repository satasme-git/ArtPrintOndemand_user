<?php

if(isset($_POST['submit'])){
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $to      = 'cgumsdemo@gmail.com';
            $user_email = $_POST['email'];
            $subject = 'Customer camplane';
            $message = $_POST['comments'];
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
