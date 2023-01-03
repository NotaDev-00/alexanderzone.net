<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "your@email.com";
  $headers = "From: ".$email;
  $txt = "You have received an email from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.html");
}

?>