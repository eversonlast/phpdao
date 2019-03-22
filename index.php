<?php

require_once ("config.php");


//Carrega Somente um usuario
//$root=new Usuarios();
//$root->loadById(3);
//echo $root;

//Carrega a Lista 
//$lista=Usuarios::getList();
//echo json_encode($lista);

//Faz busac pelo característica
//$busca = Usuarios::search("Jo");
//echo json_encode($busca);

//Carrega um usuário com login e senha
//$usuarios= new Usuarios();
//$usuarios->login("Everson", "!@#$%");
//echo ($usuarios);

/* Insert
$aluno= new Usuarios();

$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");

$aluno->insert();
echo $aluno;*/

$usuario= new Usuarios();

$usuario-> loadById(2);

$usuario->update("professor", "!@#$%&*");

echo $usuario;
?>
