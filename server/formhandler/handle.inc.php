<?php



     $msg = $msgClass = "";

     if(filter_has_var(INPUT_POST , 'submit')){
        $mailto = "adetayoomotomiwa99@gmail.com";
        $fullname = test_input($_POST['Fullname']);
        $email = test_input($_POST['email']);
        $country = test_input($_POST['Country']);
        $subject = test_input($_POST['subject']);
        $message = test_input($_POST['Message']);

         
        if(!empty($fullname) && !empty($email) && !empty($country) && !empty($subject) && !empty($message)){
           
          if(filter_var($email , FILTER_VALIDATE_EMAIL)){
 
             $subject = "Your Message Submitted Successfully | MAINLANCHE Company";
             $message1 = "Client Name: " . $fullname . "\n\n" . " Wrote the following message " . "\n\n" . $message; 
             $message2 = "Dear " . $fullname . " Thank You For Contacting Us , We Will Reach Out To You Shortly " . "\n\n" . " MAINLANCHE Company";

             $headers = "From " . $email;
             $headers2 = "From ". $mailto;
             
              $result = mail($mailto ,   $message , $message1 , $headers);
              $result2 = mail($email ,   $subject , $message2 , $headers2);
             
              if($result){
                 echo '<script type="text/javascript"> alert("Message Successfully Sent , We Will Reach Out To You Soon") </script>';
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


