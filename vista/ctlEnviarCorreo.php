<?php

$to = 'alexander9052@gmail.com';
$subject = 'Correo de prueba';
$message = 'Hola mundo';
/* $headers = 'From: webmaster@example.com' . "\r\n" .
  'Reply-To: webmaster@example.com' . "\r\n" .
  'X-Mailer: PHP/' . phpversion(); */

//mail($to, $subject, $message, $headers);
mail($to, $subject, $message);

echo 'Enviado';
