<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];

$to = 'info@plantaselectricashq.com';

$subject = 'Mensaje desde pagina web';
$message = "Nombre: $name"."\nphone: $asunto"."\nMensaje: $msg";

$headers = "From:".$_POST['email'];

mail($to, $subject, $message, $headers);

header('location:/');


?>