<?php

  $nome = addcslashes($_POST['nome']);
  $email = addcslashes($_POST['email']);
  $telefone = addcslashes($_POST['telefone']);
    $mensagem = addcslashes($_POST['mensagem']);

   $destino = "brendhamelissamartins@gmail.com";
   $assunto = "Coleta de dados - portfólio";

   $corpo = "Nome: ".$nome."\n". "email:" . $email."\n". "Telefone: ".$telefone."\n". "Mensagem: ".$mensagem;
            "Email: ".$email."\n".
            "Telefone: ".$telefone."\n".
            "Mensagem: ".$mensagem;

   $cabeca = "From: brendhamelissamartins@gmail.com" . "\n" . "reply-to: " . $email . "\n" . "X-Mailer: PHP/" . phpversion();
             
   if(mail($destino, $assunto, $corpo, $cabeca)){
       echo ("Email enviado com sucesso!");
   } else {
       echo ("Houve um erro ao enviar o email");
   }

?>