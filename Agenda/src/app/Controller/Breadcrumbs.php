<?php

    namespace Controller;
    use Library\Route\Router;

    class Breadcrumbs
    {

        public function addCrumb(){
            $route = new Router();
            $cont = count($route->parseUrl());
            $arrayLink[0] = ''; 
            echo "<a href=".DIRECTORY.">"."Home > "."</a>";
            for($i=0; $i<$cont; $i++){
                $arrayLink[0].=$route->parseUrl()[$i].'/';
                echo "<a href=".DIRECTORY.$arrayLink[0].">".$route->parseUrl()[$i]."</a>";
                if($i < $cont - 1){
                    echo " > ";
                }
            }
        }

    }