<?php
require_once("../src/models/CompteModel.php");

class CompteController{
    private CompteModel $compteModel;

public function __construct(){
    $this ->compteModel=new CompteModel;
    $this->load();
}

public function load(){
    $this->listerCompte();

}

private function listerCompte(){
    $datas = $this ->compteModel->findAll();
    require_once("../views/compte/liste.compte.html.php");

}




}