<?php
require_once("../src/models/DemandeModel.php");
require_once("../src/core/Controller.php");

class DemandeController extends Controller {
    private DemandeModel $demandeModel;

public function __construct(){
    $this ->demandeModel=new DemandeModel;
    $this->load();
}

public function load(){
    $this->listerDemande();

}

private function listerDemande(){
    parent::rendorView("demande/liste.demande",["datas"=>$this ->demandeModel-> findAllWithClient()]);
    // $datas = $this ->demandeModel-> findAllWithClient();
    // require_once("../views/demande/liste.demande.html.php");

}

}