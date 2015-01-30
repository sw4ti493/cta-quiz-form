<?php
  $question_1_A = $_POST['question_1_A'];
  $question_1_B = $_POST['question_1_B'];
  $question_1_C = $_POST['question_1_C'];
  $question_1_D = $_POST['question_1_D'];
  $question_1_E = $_POST['question_1_E'];
  $question_1_F = $_POST['question_1_F'];
  $question_1_G = $_POST['question_1_G'];
?>

<?php
    $email_from = 'New Quiz User';
 
    $email_subject = "New Quiz submission";
 
    $email_body = "API: $question_1_A.\n".
                            "PSAA: $question_1_B".\n
                            "ALD: $question_1_C".\n
                            "CAASPP: $question_1_D".\n
                            "SBAC: $question_1_E".\n
                            "CCSS: $question_1_F".\n
                            "ICA: $question_1_G".\n
?>

<?php
 
  $to = "skumar@cta.org";
 
  $headers = "From: $email_from \r\n";
 
  $headers .= "Reply-To: $visitor_email \r\n";
 
  mail($to,$email_subject,$email_body,$headers);
 
 ?>
