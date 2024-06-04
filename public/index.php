<?php
    define("WEBROOT","http://localhost:8888");

    if (isset($_REQUEST["ressource"])) {
        $ressource=$_REQUEST["ressource"];
        if (isset($_REQUEST["controller"])) {
        $controllerClass=ucfirst($_REQUEST["controller"])."Controller"; 
        require_once("../src/controllers/$ressource/$controllerClass.php");
        $demande=new $controllerClass();
        }
    }

