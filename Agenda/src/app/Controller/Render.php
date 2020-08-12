<?php

namespace Controller;

class Render
{
    
    private $dir;
    private $title;
    private $file;

    public function getDir(){
        return $this->dir;
    }

    public function setDir($dir){
        $this->dir = $dir;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getFile(){
        return $this->file;
    }

    public function setFile($file){
        $this->file = $file;
    }

    /* public function addHeader(){
        if(file_exists("View/{$this->getDir()}/header.php")){
            include ("View/{$this->getDir()}/header.php");
        }
    } */

    /* public function addFooter(){
        if(file_exists("View/{$this->getDir()}/footer.php")){
            include ("View/{$this->getDir()}/footer.php");
        }
    } */

    public function render(){
        include_once(__DIR__."../../View/layout.php");
    }

    public function view_load(){
        if($this->getDir() == null){
            if(file_exists("View/{$this->getFile()}.php")){
                include ("View/{$this->getFile()}.php");
            }
        }else{
            if(file_exists("View/")){
                if(file_exists("View/{$this->getDir()}/{$this->getFile()}.php")){
                    include ("View/{$this->getDir()}/{$this->getFile()}.php");
                }
            }
        }
        
    }

    public function loadView($file, $diretorio, array $dados = null){
        if($diretorio == null){
            if(file_exists("FrontEnd/{$file}.php")){
                if($dados == null){
                    include ("FrontEnd/{$file}.php");
                }else{
                    extract($dados);
                    include ("FrontEnd/{$file}.php");
                }
                
            }
        }else{
            if(file_exists("FrontEnd/{$diretorio}{$file}.php")){
                if($dados == null){
                    include ("FrontEnd/{$diretorio}{$file}.php");
                }else{
                    extract($dados);
                    include ("FrontEnd/{$diretorio}{$file}.php");
                }
                
            }
        }
        
    }

}