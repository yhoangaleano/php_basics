<?php
namespace App\Model;

use App\Lib\database;

class jornaleroModel{
    
    private $pdo = null;    
    private $fluent = null;
    private $table = 'jornalero';

    public function __CONSTRUCT(){
        $this->fluent = database::getConnection()['fluentPDO'];
        $this->pdo = database::getConnection()['pdo'];
    }

    public function createJornalero($data){
        $data['fechaNacimiento'] = date("Y-m-d", strtotime($data['fechaNacimiento']));
        
        $this->fluent->insertInto($this->table, $data)
                 ->execute();
    }
    
    public function readJornalero($id){
        return $this->fluent
                    ->from($this->table, $id)
                    ->fetch();
    }
    
    public function readJornaleros(){
        return $this->fluent
                    ->from($this->table)
                    ->fetchAll();
    }
    
    public function updateJornalero($data){
        $id = $data['id'];
        unset($data['id']);

        $this->fluent->update($this->table, $data, $id)
                 ->execute();
    }
    
    public function deleteJornalero($id){
        $this->fluent->deleteFrom($this->table, $id)
                 ->execute();
    }
}