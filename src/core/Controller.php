<?php

class Controller{

public function rendorview(string $view,array $datas=[]):void{
    extract($datas);
    ob_start();
    require_once("../views/$view.html.php");
    $contentForView = ob_get_clean();
    require_once("../views/layout/base.layout.html.php");
}




}