<?php
require_once("../src/models/TransactionModel.php");
require_once("../src/core/Controller.php");


class TransactionController extends Controller{
    private TransactionModel $transactionModel;

    public function __construct(){
        $this ->transactionModel=new TransactionModel;
        $this->load();
    }
    
    public function load(){
        $this->listerTransaction();  
    }
    
    private function listerTransaction(){
        parent::rendorView("transaction/transaction",["datas"=> $this ->transactionModel-> findAllTransaction()]);
        // $datas = $this ->transactionModel-> findAllTransaction();
        // require_once("../views/transaction/transaction.html.php");
    
    }
}