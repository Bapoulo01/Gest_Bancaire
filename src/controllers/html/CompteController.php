<?php
require_once("../models/CompteModel.php");

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
    $data = $this ->compteModel=findAll();
    require_once("../views/compte/liste.compte.html.php");

}




}