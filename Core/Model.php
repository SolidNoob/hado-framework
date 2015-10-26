<?php

namespace Hado\Core;

use Hado\Core\Database;
use \Pdo;

Class Model{

	protected $db;
	public $table;

	public function __construct(){
		$this->db = Database::get();
	}
	public function sqlQuery($query){
		try 
		{
			$pdoStatement = $this->db->prepare($query);
			$pdoStatement->execute();
			return $pdoStatement->fetchAll(PDO::FETCH_OBJ);
		} 
		catch (\PDOException $e)
		{
            die('Erreur lors de la requête SQL: ' . $e->getMessage());
        }
	}

	public function getAll()
	{
		try 
		{
			$query = 'SELECT * FROM '.$this->table;
			$pdoStatement = $this->db->prepare($query);
			$pdoStatement->execute();
			return $pdoStatement->fetchAll(PDO::FETCH_OBJ);
		} 
		catch (\PDOException $e)
		{
            die('Erreur lors de la requête SQL: ' . $e->getMessage());
        }
	}

	public function select($where = '', $bind = '', $fields = '*'){

        if(!is_array($bind)){
            $bind = array($bind);
        }
        
        $sql = "SELECT $fields FROM $this->table";
        if(!empty($where)){
            $sql .= " WHERE $where";
        }
        $sql .= " ;";
        
        $pdoStatement = $this->db->prepare($sql);
        $pdoStatement->execute($bind);
        
        return $pdoStatement->fetchAll(PDO::FETCH_OBJ);
    }

    public function delete($where, $bind = ""){
        if(!is_array($bind)){
            $bind = array($bind);
        }
        
        $sql = 'DELETE FROM ' . $this->table . ' WHERE ' . $where . ';';
        $pdoStatement = $this->db->prepare($sql);
        $pdoStatement->execute($bind);
        
        return $pdoStatement->rowCount();
    }

    public function insert($data){
        $fields = array_keys($data);
        
        $sql = 'INSERT INTO ' . $this->table . ' (' . implode(', ', $fields) . ') VALUES (:' . implode(', :',$fields) . ');';
        $pdoStatement = $this->db->prepare($sql);
        
        $bind = array();
        foreach($fields as $field){
            $bind[':'.$field] = $data[$field];
        }
        $pdoStatement->execute($bind);
        
        return $pdoStatement->rowCount();
    }
}