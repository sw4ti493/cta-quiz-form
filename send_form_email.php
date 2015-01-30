<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "skumar@cta.org";
 
    $email_subject = "New CTA Quiz Submission";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['question_1_A']) ||
 
        !isset($_POST['question_1_B']) ||
 
        !isset($_POST['question_1_C']) ||
 
        !isset($_POST['question_1_D']) ||
        
        !isset($_POST['question_1_E']) ||
        
        !isset($_POST['question_1_F']) ||
 
        !isset($_POST['question_1_G'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $question_1_A = $_POST['question_1_A']; // not required
 
    $question_1_B = $_POST['question_1_B']; // not required
 
    $question_1_C = $_POST['question_1_C']; // not required
 
    $question_1_D = $_POST['question_1_D']; // not required
 
    $question_1_E = $_POST['question_1_E']; // not required
    
    $question_1_F = $_POST['question_1_F']; // not required
    
    $question_1_G = $_POST['question_1_G']; // not required
 
    
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "API: ".clean_string($question_1_A)."\n";
 
    $email_message .= "PSAA: ".clean_string($question_1_B)."\n";
 
    $email_message .= "ALD: ".clean_string($question_1_C)."\n";
 
    $email_message .= "CAASPP: ".clean_string($question_1_D)."\n";
 
    $email_message .= "SBAC: ".clean_string($question_1_E)."\n";
    
    $email_message .= "CCSS: ".clean_string($question_1_F)."\n";
    
    $email_message .= "ICA: ".clean_string($question_1_G)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for submitting your quiz.
 
 
 
<?php
 
}
 
?>
