<?php

class Usuarios{
	
	private $idusuarios;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;
	
	public function getIdusuarios(){
		
		return $this->idusuarios;
	}
	
	public function setIdusuarios($values){
		
		$this->idusuarios=$values;
	}
	
	public function getDeslogin(){
		
		return $this->deslogin;
	}
	
	public function setDeslogin($values){
		
		$this->deslogin=$values;
	}
	
	public function getDessenha(){
		
		return $this->dessenha;
	}
	
	public function setDessenha($values){
		
		$this->dessenha=$values;
	}
	
	public function getDtcadastro(){
		
		return $this->dtcadastro;
	}
	
	public function setDtcadastro($values){
		
		$this->dtcadastro=$values;
	}
	
	public function loadById($id){
		
		$sql = new sql();
		$results= $sql->select("SELECT * FROM tb_usuarios WHERE idusuarios=:ID", array(":ID"=>$id));
		
		if (isset($results[0])){
			//podendo escrever assim if(count ($results)>0)
			$row=$results [0];
			$this->setIdusuarios($row['idusuarios']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));	
		}
	}
	
	public function __toString(){
		
		return json_encode(array(
		"idusuarios"=>$this->getIdusuarios(),
		"deslogin"=>$this->getDeslogin(),
		"dessenha"=>$this->getDessenha(),
		"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y  H:i:s")
		));
	}
}