<?php
class View{
    private $config;

    public function __construct(){
        $this->config = Config::singleton();
    }

    public function show($template, $vars = array()){
        $templatePath = "{$this->config->get("views")}{$template}.php";

        if(is_file($templatePath)){
            extract($vars);
            include_once "{$templatePath}";
        }else{
            trigger_error("Template \"{$template}\" does not exist.", E_USER_NOTICE);
        }
    }
}
?>