<?php
    namespace Models;

    class ContatoModel{
        public static function enviarFormulario(){
            $mail = new \Email('IPv4.localhost','raissa.fullstack@gmail.com','root','Raissa');
            $mail->addAdress('teste@example.com','Raissa');
            $mail->formatarEmail(array('assunto'=>'Mensagem do site','corpo'=>'Aqui é uma mensagem do site!'));
            $mail->enviarEmail();
        }
    }
?>