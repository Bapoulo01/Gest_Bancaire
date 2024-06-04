<?php
require_once("../src/models/CompteModel.php");

class ApiController{
    private CompteModel $compteModel;

public function __construct(){
    $this ->compteModel=new CompteModel;
}

public function listerCompte(){
    $data = $this ->compteModel->findAll();
    //json
}




}