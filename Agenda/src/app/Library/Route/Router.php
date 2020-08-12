<?php

    namespace Library\Route;

    class Router
    {

        public $route;
        public $controller;
        public $rota;

        public function getController(){
            return $this->controller;
        }

        public function setController($controller){
            $this->controller = $controller;
        }

        public function getRoute(){
            return $this->rota;
        }

        public function setRoute($rota){
            $this->rota = $rota;
        }

        public function parseUrl(){
            return explode("/",rtrim($_GET['url']),FILTER_SANITIZE_URL);
        }

        public function getRota(){
            $url = $this->parseUrl();
            $indice = $url[0];

            $this->route = array(
                "" => "Home",
                "home" => "Home",
                "login" => "RealizaLogin",
                "cadastrar" => "Cadastrar",
                "dashboard" => "Dash"
            );

            if(array_key_exists($indice, $this->route)){
                if(file_exists("Controller/{$this->route[$indice]}.php")){
                    return $this->route[$indice];
                }else{
                    return "Home";
                }
            }else{
                return "Home";
            }

        }

       
    }