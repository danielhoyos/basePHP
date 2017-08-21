<?php   
    $config = Config::singleton();

    // Configuraciones de Base de datos
    $config->set("host", "localhost");
    $config->set("dbname", "tienda_online");
    $config->set("user", "root");
    $config->set("password", "softicolombia2017");

    // Configuraciones Globales
    $config->set("appName", "Base de PHP");
    $config->set("folderApp", "basePHP");
    $config->set("root", "{$_SERVER["DOCUMENT_ROOT"]}/{$config->get("folderApp")}/");
    $config->set("http", "http://{$_SERVER["HTTP_HOST"]}/{$config->get("folderApp")}/");

    // Configuraciones AppServer
    $config->set("class", "{$config->get("root")}appserver/_class/");
    $config->set("controllers", "{$config->get("root")}appserver/controllers/");
    $config->set("entities", "{$config->get("root")}appserver/entities/");
    $config->set("models", "{$config->get("root")}appserver/models/");
    $config->set("views", "{$config->get("root")}appserver/views/");

    // Configuraciones AppClient
    $config->set("imgRoot", "{$config->get("root")}appclient/assets/img/");
    $config->set("imgHttp", "{$config->get("http")}appclient/assets/img/");
    $config->set("libs", "{$config->get("http")}appclient/assets/libs/");
    $config->set("fonts", "{$config->get("http")}appclient/assets/fonts/");
    $config->set("css", "{$config->get("http")}appclient/css/");
    $config->set("js", "{$config->get("http")}appclient/js/");
?>