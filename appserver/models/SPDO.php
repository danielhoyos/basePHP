<?php
class SPDO extends PDO{
    private static $instance = null;
    private $config;

    public function __construct(){
        $this->config = Config::singleton();
        try{
            parent::__construct("mysql:host={$config->get("host")};dbname={$config->get("dbname")}", $config->get("user"), $config->get("password"));
            $this->exec("SET CHARACTER SET UTF8");
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }catch(PDOExeption $e){
            exit("Error: {$e->getMessage()}");
        }
    }

    public static function singleton(){
        if(!isset(self::$instance)){
            $class = __CLASS__;
            self::$instance = new $class;
        }
        return self::$instance;
    }

    public function __clone(){
        trigger_error("La clonación no es permitida!, " . E_USER_ERROR);
    }
}
?>