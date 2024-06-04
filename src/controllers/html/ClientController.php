<?php
require_once("../src/models/UsersModel.php");

class ClientController{
    private UsersModel $usersModel;

public function __construct(){
    $this ->usersModel=new UsersModel;
    $this->load();
}

public function load(){
    $this->listerClient();

}

private function listerClient(){
    $datas = $this ->usersModel-> findAllUserByProfil("Client");
    require_once("../views/client/liste.client.html.php");

}




}