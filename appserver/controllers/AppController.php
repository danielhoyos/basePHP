<?php
class AppController{
    public static function main(){
        // Archivos de Configuración
        require_once "appserver/_class/Config.php";
        require_once "config.php";

        // Verificamos los controladores y las acciones
        $controllerName = empty($_GET["controller"]) ? "IndexController" : "{$_GET["controller"]}Controller";
        $actionName = empty($_GET["action"]) ? "index" : "{$_GET["action"]}";

        // Path del Controlador
        $controllerPath = "{$config->get("controllers")}{$controllerName}.php";

        // Verificamos si el controllador existe y llamamos la función solicitada
        if(is_file($controllerPath)){

            if(is_callable(array($controllerName, $actionName), false)){
                $controller = new $controllerName();
                $controller->$actionName();
            }else{
                trigger_error("{$controllerName} -> {$actionName} not found", E_USER_NOTICE);
            }
        }else{
            exit("Controller \"{$controllerName}\" does not exist - 404 file not found");
        }
    }
}
?>