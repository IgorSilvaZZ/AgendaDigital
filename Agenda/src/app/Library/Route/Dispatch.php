<?php

    namespace Library\Route;

    use Library\Route\Router;

    class Dispatch extends Router
    {
        private $method;
        private $params = [];
        private $object;

        protected function getMethod(){
            return $this->method;
        }

        public function setMethod($method){
            $this->method = $method;
        }

        protected function getParam(){
            return $this->params;
        }

        public function setParam($params){
            $this->params = $params;
        }

        public function __construct(){
            self::addController();
        }

        private function addController(){
            $rotaController = $this->getRota();
            $namespace = "Controller\\{$rotaController}";
            $this->object = new $namespace;

            if(isset($this->parseUrl()[1])){
                self::addMethod();
            }

        } 

        private function addMethod(){
            if(method_exists($this->object, $this->parseUrl()[1])){
                $this->setMethod("{$this->parseUrl()[1]}");
                self::addParams();
                call_user_func_array([$this->object, $this->getMethod()], $this->getParam());
            }
        }

        private function addParams(){
            $countArray = count($this->parseUrl());
            if($countArray > 2){
                foreach($this->parseUrl() as $key => $value){
                    //echo $key . "=>" . $value . "<br>";
                    if($key > 1){
                        $this->setParam($this->params += [$key => $value]);
                    }
                }
            }
        }

    }