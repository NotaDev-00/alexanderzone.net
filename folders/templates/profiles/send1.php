<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "alexanderzone.net@gmail.com";
  $headers = "From: ".$email;
  $txt = "You have received an email from ".$name.".\n\n".$message;

  // Try to send the email
  if (mail($mailTo, $subject, $txt, $headers)) {
    // If the email was sent successfully, redirect the user to the success page
    header("Location: typage2.html");
  } else {
    // If the email was not sent, redirect the user to the error page
    header("Location: error1.html");
  }
}

?>
