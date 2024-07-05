<?php
require_once("../src/core/Model.php");

class LoginModel extends Model{

    public function connexion(string $email, string $pwd)
    { 
        $sql = "select * from users u,profil p where p.idp=u.idp And email Like '$email' And pwd Like '$pwd' ";
        return $this->executeSelect($sql,true);
    }


}