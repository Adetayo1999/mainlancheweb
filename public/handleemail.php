<?php


if(filter_has_var(INPUT_POST , 'submit')){
    $mailto = "adetayoomotomiwa99@gmail.com";
    $from = SanitizeInput($_POST["email"]);
    $fullName = SanitizeInput($_POST["Fullname"]);
    $country = SanitizeInput($_POST["Country"]);
    $sub = SanitizeInput($_POST["subject"]);
    $text = SanitizeInput($_POST["Message"]);

           if(!empty($from) && !empty($fullName) && !empty($country) && !empty($sub) && !empty($text)){
            $subject = "Your Message Submitted Succcessfully | WEBSITE TITLE";
            $message = "Client Name: ". $fullName . "\n\n" . "From" . "\n\n" .  $Country . "\n\n" . "Wrote the following message: ". "\n\n". $text;
            $message2= "Dear ". $fullName. "\n\n". "Thank You for contacting us! We will reach out to you shortly \n\n Pathway Dreams Academy";
            $headers = "From ". $from;
            $headers2 = "From ". $mailto;
            $result = mail($mailto, "New Message From Client", $message, $headers);
            $result2 = mail($from, $subject, $message2, $headers2);
            if ($result) {
                echo '<script type="text/javascript"> alert("Message was sent Succcessfully, We will contact you shortly")
         </script>';
            } else {
               echo '<script type="text/javascript"> alert("Submission failed! Try again ") </script>';
            }
           }
           else{
               echo '<script type="text/javascript" defer> alert("All Inputs Must Be Filled ") </script>';
           }

    
  }
     













   function SanitizeInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

   }




?>