<?php

if(isset($_POST['email']) && !empty($_POST['email']))

$nome =addcslashes($_POST['name']);
$email =addcslashes($_POST['email']);
$mensagem =addslashes($_POST['message']);

$to = "ursulamvelilla@gmail.com"
$subjet = "contato - Site coltech"
$body = "Nome: ".$nome. "\n". 
        "Email: ".$email. "\n".
        "Mensagem: ".$mensagem;

$header = "From: Atendimento@coltechconsultoria.com.br"."\r\n".
            "Reply-To:".$email. "\e\n".
            "X=Mailer:PHP/".phpversion();

if (mail($to,$subjet,$body,$header)){
    echo("Email enviado com sucesso!");   
} else{
    echo("O Email não pode ser enviado");
}

?>