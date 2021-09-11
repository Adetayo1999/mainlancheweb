<?php

                  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";  


     $msg = $msgClass = "";

     if(filter_has_var(INPUT_POST , 'submit')){
        
        $fullname = test_input($_POST['Fullname']);
        $email = test_input($_POST['email']);
        $country = test_input($_POST['Country']);
        $subject = test_input($_POST['subject']);
        $message = test_input($_POST['Message']);

         
        if(!empty($fullname) && !empty($email) && !empty($country) && !empty($subject) && !empty($message)){
           
          if(filter_var($email , FILTER_VALIDATE_EMAIL)){
 
//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions


$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;
// $mail->SMTPSecure = 'tsl';                                   //Enable SMTP authentication
$mail->Username   = 'adetayoomotomiwa99@gmail.com';                     //SMTP username
$mail->Password   = 'panasonic99';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 587; 




//From email address and name
$mail->From = $email;
$mail->FromName = $fullname;

//To address and name
$mail->addAddress("adetayoomotomiwa99@gmail.com");



//CC and BCC
$mail->addCC("cc@example.com");
$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = "<i> $message </i>";
// $mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
       
          }

          else{
                      $msg= "Invalid Email Address";
                      $msgClass="Error";                               
          }
        


        }
        else{
            
           $msg = "Inputs Must Be Filled";
           $msgClass="Error";           
           
        }
            

     }


     function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }


