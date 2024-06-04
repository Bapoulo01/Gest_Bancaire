<?php
    define("WEBROOT","http://localhost:8888");

    // if (isset($_REQUEST["controller"])) {
    //     if ($_REQUEST["controller"]== "demande"){
    //         require_once("../src/controllers/html/DemandeController.php");
    //         $controller=new DemandeController();
    //     }
    //     else if ($_REQUEST["controller"]== "compte"){
    //         require_once("../src/controllers/html/compteController.php");
    //         $controller=new CompteController();
    //     }
    //     else if ($_REQUEST["controller"]== "client"){
    //         require_once("../src/controllers/html/ClientController.php");
    //         $controller=new ClientController();
    //     }
    // }

    if (isset($_REQUEST["ressource"])) {
        $ressource=$_REQUEST["ressource"];
        if (isset($_REQUEST["controller"])) {
        $controllerClass=ucfirst($_REQUEST["controller"])."Controller"; 
        require_once("../src/controllers/$ressource/$controllerClass.php");
        $demande=new $controllerClass();
        }
    }

