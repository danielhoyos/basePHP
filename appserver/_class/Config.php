<?php
class Config{
    private $config;
    private static $instance = null;

    public function __construct(){
        $this->config = array();
    }

    public function set($key, $value){
        if(!isset($this->config[$key])){
            $this->config[$key] = $value;
        }
    }

    public function get($key){
        if(isset($this->config[$key])){
            return $this->config[$key];
        }
    }

    public static function singleton(){
        if(!isset(self::$instance)){
            $class = __CLASS__;
            self::$instance = new $class;
        }

        return self::$instance;
    }
}
?>