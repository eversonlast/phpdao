<?php

class sql extends PDO{
	
	private $conn;
	
	public function __construct(){
		
		$this->conn= new PDO("mysql:host=localhost; dbname=dbphp7", "root", "1234");
	}
	
	private function setParams($statment, $parameters=array()){
		
		foreach($parameters as $key =>$values){
			
			$this->setParam($statment, $key, $values);
		}
		
	}
	
	private function setParam($statment, $key, $values){
		
		$statment->bindParam($key, $values);
	}
	
	public function query($rawQuery, $params=array()){
		
			$stmt=$this->conn->prepare($rawQuery);
			$this->setParams($stmt, $params);
			$stmt->execute();
			return $stmt;
		
	}
	
	public function select ($rawQuery, $params=array()):array
	{
		$stmt=$this->query($rawQuery, $params);
		return $stmt->fetchAll(PDO:: FETCH_ASSOC);
	}
}