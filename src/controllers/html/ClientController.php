<?php
require_once("../src/models/UsersModel.php");
require_once("../src/core/Controller.php");


class ClientController extends Controller{
    private UsersModel $usersModel;

public function __construct(){
    $this ->usersModel=new UsersModel;
    $this->load();
}

public function load(){
    $this->listerClient();

}

private function listerClient(){
    parent::rendorView("client/liste.client",["datas"=>$this ->usersModel-> findAllUserByProfil("Client")]);
    // $datas = $this ->usersModel-> findAllUserByProfil("Client");
    // require_once("../views/client/liste.client.html.php");

}


}