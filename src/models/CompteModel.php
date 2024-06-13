<?php
require_once("../src/core/Model.php");

class CompteModel extends Model{

    public function findAllCompte()
    { 
        $sql = "select * from compte c,users u,agence a,typecpt t,demande d WHERE c.idu = u.idu and c.ida = a.ida 
                and c.idtc = t.idtc and c.idd = d.idd and d.idtc = t.idtc;";
        return $this->executeSelect($sql);
    }

}