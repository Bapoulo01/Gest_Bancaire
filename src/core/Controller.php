<?php

class Controller{

protected $layout="base";

public function rendorview(string $view,array $datas=[]):void{
    extract($datas);
    ob_start();
    require_once("../views/$view.html.php");
    $contentForView = ob_get_clean();
    require_once("../views/layout/$this->layout.layout.html.php");
}

public function rendorJson(array $datas){
   echo json_encode($datas);

}




}