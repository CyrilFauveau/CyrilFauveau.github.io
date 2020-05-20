<?php

if (!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['message'])) {

  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $message = $_POST['message'];

  $to      = 'fauveaucyril@gmail.com';
  $subject = $mail;
  $headers = 'From: webmaster@example.com' . "\r\n" .
  'Reply-To: webmaster@example.com' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
}
