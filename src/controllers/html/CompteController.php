<?php
require_once("../src/models/CompteModel.php");
require_once("../src/core/Controller.php");

class CompteController extends controller{
    private CompteModel $compteModel;

public function __construct(){
    $this ->compteModel=new CompteModel;
    $this->load();
}

public function load(){
    $this->listerCompte();

}

private function listerCompte(){
    parent::rendorView("compte/liste.compte",["datas"=>$this ->compteModel->findAllCompte()]);
    // $datas = $this ->compteModel->findAllCompte();
    // require_once("../views/compte/liste.compte.html.php");

}




}