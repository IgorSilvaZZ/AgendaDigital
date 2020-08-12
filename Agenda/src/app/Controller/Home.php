<?php

    namespace Controller;
    use Controller\Render;

    class Home extends Render
    {
        
        public function __construct(){
            /* $this->setTitle("Pagina Inicial");
            $this->setDir("Home");
            $this->setFile('home');
            $this->view_load(); */
            $this->loadView('home',null);
        }

    }
