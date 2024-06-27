<?php
require_once("../src/models/ProfilModel.php");
require_once("../src/core/Controller.php");


class ProfilController extends Controller{
    private ProfilModel $profilModel;

public function __construct(){
    $this ->profilModel=new ProfilModel;
    $this->load();
}

public function load(){
    $this->listerProfil();

}

private function listerProfil(){
    parent::rendorView("profil/listeProfil",["datas"=>$this ->profilModel-> findAll()]);
    // $datas = $this ->profilModel-> findAll();
    // require_once("../views/profil/listeProfil.html.php");

}


}