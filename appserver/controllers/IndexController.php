<?php
class IndexController{
    private $view;
    private $config;

    public function __construct(){
        $this->view = new View();
        $this->config = Config::singleton();
    }

    public function index(){
        $this->view->show("index");
    }
    public function menu(){
        echo "Función Menu";
    }
}
?>