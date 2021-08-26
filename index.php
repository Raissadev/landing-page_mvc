<?php
    /*
    NVC
    N = Model
    V = View
    C = Controler
    
    /contato
        Contato Controler => Controlador geral.
        Contato View => Responsável por renderizar a página.
        Contato Model => Onde tem todas as funções necessárias.
    */

    $autoload = function($class){
        if($class == 'Email'){
            include('phpmailer/PHPMailerAutoload.php');
        };
        include($class.'.php');
    };
    spl_autoload_register($autoload);

    $app = new Application();
    $app->executar();
?>