<?php

  $to = "lameeszakialabd@gmail.com";
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $email = $_POST['email'];
  $headers = "From: " . $email . "\r\n";

  mail($to,$subject,$message,$headers);

?>
