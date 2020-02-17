<?php
//So ira funcionar quando o site estiver ospedado
//conteudo aula 42 loja freitas

$to      = Config::EMAIL_USER;
$subject = 'Contato- Teste NP2 - DSI'; 
$message = $_GET['txtinputarea'];
$dest    = $_GET['txtinputemail'];

$headers = 'From: '. $dest;

mail($to, $subject, $message, $headers);
?>
<script>alert('Email enviado com sucesso!')</script>
<meta http-equiv="refresh" content="0; url=contato">