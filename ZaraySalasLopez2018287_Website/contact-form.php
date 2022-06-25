<?php
if(isset($_POST['send'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "salas-lopez@hotmail.com";
    $email_subject = "ART GALLERY MATTER";  
 
    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $message = $_POST['message']; // required

    echo $name;
    echo $email;
    echo $message;
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $message .= "Name: ".clean_string($name)."\n";
    $message .= "Email: ".clean_string($email_from)."\n";
    $message .= "Comments: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $message, $headers); 
}
?>