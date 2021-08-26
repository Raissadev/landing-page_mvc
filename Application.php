<?php
    define('INCLUDE_PATH','http://localhost/Curso/Curso/Back-end/MVC%20e%20Rotas/');
    define('INCLUDE_PATH_FULL','http://localhost/Curso/Curso/Back-end/MVC%20e%20Rotas/Views/pages/');

    class Application{
        public function executar(){
            $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
            $url = ucfirst($url);
            $url.="Controller";
            if(file_exists('Controllers/'.$url.'.php')){
                $className = 'Controllers\\'.$url;
                //echo 'Estou carregando a classe: '.$url;
                $controller = new $className();
                $controller->executar();
            }else{
                die("Não existe esse controlador!");
            }
        }
    }
?>