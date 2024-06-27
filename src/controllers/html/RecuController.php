<?php
require_once("../src/models/RecuModel.php");
require_once("../src/core/Controller.php");


class RecuController extends Controller{
    private RecuModel $recuModel;

public function __construct(){
    $this ->recuModel=new RecuModel;
    $this->load();
}

public function load(){
    $this->listerRecu();

}

private function listerRecu(){
    parent::rendorView("recu/listeRecu",["datas"=>$this ->recuModel-> findAll()]);
    // $datas = $this ->recuModel-> findAll();
    // require_once("../views/recu/listeRecu.html.php");

}


}