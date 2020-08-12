<?php

namespace Controller;

use Controller\Render;

class RealizaLogin extends Render 
{

    public function __construct(){
        $this->loadView('login','View/Login/', $dados = [
            'dir' => 'FrontEnd/View/Login/',
            'titulo' => "Login"
        ]);
    }

}