<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$ciudad = $_POST['ciudad'];
$message = $_POST['message'];

$email_form = 'mbvetrano@gmail.com';

$email_subject = 'Nueva consulta desde Web!';

$email_body = "Nombre persona: $name.\n".
              "Correo: $visitor_email.\n".
              "Ciudad de Origen: $ciudad.\n".
              "Consulta: $message .\n";

$to = 'mvbetrano@gmail.com';

$headers = "Desde: $email_from \r\n";

$headers .= "Respoder a: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("localizacion: contactame.html");

?>