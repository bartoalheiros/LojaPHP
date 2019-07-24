<?php

$to      = 'lojadofreitasb89@gmail.com';
$subject = 'Contato - Loja Freitas';
$message = 'Email de '.$_GET['txtinputnome']. "\r\n" .$_GET['txtinputarea'];
$dest = $_GET['txtinputemail'];

$headers = "From: " .$dest;

mail($to, $subject, $message, $headers);
var_dump($_GET);
?>


