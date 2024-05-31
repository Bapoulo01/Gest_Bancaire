<?php
require_once("../src/core/Model.php");

class DemandeModel extends Model{
    public int $id;
    public string $dated;
    public string $tel;
    public string $email;
    public int $idtc;
    public int $idu;
    public string $status;
 


    public function __construct(){
        $this->table="demande";
        $this->class="DemandeModel";
    }

    // public function save(){
    //     $SQL_INSERT="INSERT INTO compte (numero, solde, dateCrea, taux, frais, etat) 
    //     VALUES ('$this->numero','$this->solde','$this->dateCrea','$this->taux','$this->frais','$this->etat')";
    //     $result = $this->openConnexion()->exec($SQL_INSERT); 
    // }

 
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getDate()
    {
        return $this->dated;
    }

    public function setDate($dated)
    {
        $this->dated = $dated;

        return $this;
    }

    public function getTel()
    {
        return $this->tel;
    }

  
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

   
    public function setEmail($etat)
    {
        $this->email = $email;

        return $this;
    }

    public function geIdtc()
    {
        return $this->idtc;
    }

 
    public function setIdtc($idtc)
    {
        $this->idtc = $idtc;

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

   
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    
    public function geIdu()
    {
        return $this->idu;
    }

 
    public function setIdu($idu)
    {
        $this->idu = $idu;

        return $this;
    }

   












}