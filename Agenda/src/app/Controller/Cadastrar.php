<?php

namespace Controller;

use Controller\Render;

class Cadastrar extends Render 
{

    public function __construct(){
        $this->loadView('cadastrar','View/Login/', $dados = [
            'dir' => 'FrontEnd/View/Login/',
            'titulo' => "Sing Up"
        ]);
    }

}