<?php
require_once("../core/Model.php");

class CompteModel extends Model{
    private int $idc;
    private string $numero;
    private float $taux;
    private float $frais;
    private string $etat;
    private int $ida;
    private int $idu;
    private int $idtc;
    private int $idd;

    public function __construct(){
        $this->table="compte";
        $this->class="CompteModel";
    }

    public function save(){
        $SQL_INSERT="INSERT INTO compte (numero, solde, dateCrea, taux, frais, etat) 
        VALUES ('$this->numero','$this->solde','$this->dateCrea','$this->taux','$this->frais','$this->etat')";
        $result = $this->openConnexion()->exec($SQL_INSERT); 
    }

 
    public function getId()
    {
        return $this->idc;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function getTaux()
    {
        return $this->taux;
    }

  
    public function setTaux($taux)
    {
        $this->taux = $taux;

        return $this;
    }

    public function getEtat()
    {
        return $this->etat;
    }

   
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    // public function getDateCrea()
    // {
    //     return $this->dateCrea;
    // }

 
    // public function setDateCrea($dateCrea)
    // {
    //     $this->dateCrea = $dateCrea;

    //     return $this;
    // }

 


  
    // public function getFrais()
    // {
    //     return $this->frais;
    // }

   
    // public function setFrais($frais)
    // {
    //     $this->frais = $frais;

    //     return $this;
    // }

   












}