<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $contato = addslashes($_POST['contato']);
    $informacao = addslashes($_POST['informacao'])

    $para = "pricylia884@gmail.com";
    $assunto = "Importante - Portfólio";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Contato: ".$contato."\n"."Informação: ".$informacao;

    $cabeca = "From: teste@gmail.com"."\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    else{
            echo("Houve um erro ao enviar e-mail.")
        }
    }
?>