<?php

namespace Controller;

use Controller\Render;

class Dash extends Render 
{

    public function __construct(){
        $this->loadView('dashboard', 'View/', $dados = [
            "titulo" => "Dashboard"
        ]);
    }

}