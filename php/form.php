<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];

if($name == '' | $phone == '' | $msg == '' | $_POST['email'] == ''){

    echo json_encode ('error');

}   else {

    
    $to = 'alterplantashq@yahoo.com';
    // $to = 'nicolaschamorro@cisde.co';

    $subject = 'Mensaje desde pagina web';
    $message = "Nombre: $name"."\nTelefono: $phone"."\nMensaje: $msg";

    $headers = "From:".$_POST['email'];

    mail($to, $subject, $message, $headers);

    echo json_encode ('ok');

}


?>

