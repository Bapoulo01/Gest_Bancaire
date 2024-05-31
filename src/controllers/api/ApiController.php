<?php
require_once("../src/models/DemandeModel.php");

class ApiController{
    private DemandeModel $demandeModel;

public function __construct(){
    $this ->demandeModel=new DemandeModel;
    $this->load();
}

public function load(){
    $this->listerDemande();

}

private function listerDemande(){
    $datas = $this ->demandeModel->findAll();
    echo json_encode($datas);

}




}