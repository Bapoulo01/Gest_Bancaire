<?php

abstract class  Model
{
    protected string $table;
    protected string $class;
    protected string $columns;
    protected string $values;

    public function findAll():array
    {
        $sql = "select * from $this->table";
        $result = $this->openConnexion()->query($sql);
        // var_dump($result);
        return $result->fetchAll(PDO::FETCH_CLASS,$this->class);
    }
    
    protected function openConnexion()
    {
        return new PDO(
            'mysql:host=localhost;dbname=gestion_bank;charset=utf8',
            'Bank',
            'passer123'
        );
    }


}

// public function save(){
//     $SQL_INSERT="insert into $this->table ($this->columns) values ($this->values)";
//     $result = $this->openConnexion()->exec($SQL_INSERT); 
// }