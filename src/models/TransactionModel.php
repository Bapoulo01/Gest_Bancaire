<?php
require_once("../src/core/Model.php");

class TransactionModel extends Model{

    public function findAllTransaction()
    { 
        $sql = "select * from transaction t,users u,compte c where t.idu = u.idu and t.idc = c.idc;";
        return $this->executeSelect($sql);
    }

}