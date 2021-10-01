<?php

 if(isset($_POST["submit"])){

  $name = $_POST["name"];
  $visitor_email = $_POST["email"];
  $phone = $_POST["phone"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];



  $email_from = $visitor_email;

  $email_subject = "$subject";

  $email_body = "User Name: $name.\n" .
    "User Email: $visitor_email.\n" .
    "User Message: $message.\n" .
    "User Phone: $phone.\n";

  $mailTo = "gantavya2001@gmail.com";
  $headers = "From: $email_from \r\n";

  mail($mailTo, $email_subject, $email_body, $headers);

  header("location:https://lnctcodersgroup.github.io");
 }
   
?>
