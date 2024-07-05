<?php
    define("WEBROOT","http://localhost:8888");
    require_once("../src/core/Router.php");
    require_once("../src/core/Validator.php");
    require_once("../src/core/Session.php");
    require_once("../src/core/Autorisation.php");

    Router::run();


