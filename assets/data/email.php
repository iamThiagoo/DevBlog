<?php

    if(isset($_POST["email"]) && !empty($_POST["email"])){
        $nome = $_POST["name"];
        $email = $_POST["email"];
        $msg = $_POST["textarea"];

        $to = "devthiagoferreira@gmail.com";
        $subject = "Contato - DevBlog";
        $body = "Nome: " . $nome . "\r\n" . "Email: " . $email . "\r\n" . "Mensagem: " . $msg;
        $header = "From: thiagofer2003@gmail.com" . "\r\n" . "Reply-To: " . $email . "\r\n" . "X=Mailer:PHP/" . phpversion();

        if(mail($to, $subject, $body, $header)){
            echo "Email enviado com sucesso!";
        }
        else{
            echo "O email não foi enviado!";
        }

    }
