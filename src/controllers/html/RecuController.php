<?php
require_once("../src/models/RecuModel.php");

class RecuController{
    private RecuModel $recuModel;

public function __construct(){
    $this ->recuModel=new RecuModel;
    $this->load();
}

public function load(){
    $this->listerRecu();

}

private function listerRecu(){
    $datas = $this ->recuModel-> findAll();
    require_once("../views/recu/listeRecu.html.php");

}


}