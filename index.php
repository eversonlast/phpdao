<?php

require_once ("config.php");


//Carrega Somente um usuario
//$root=new Usuarios();
//$root->loadById(3);
//echo $root;

//Carrega a Lista 
$lista=Usuarios::getList();

echo json_encode($lista);

?>
