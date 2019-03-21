<?php

require_once ("config.php");

$root=new Usuarios();

$root->loadById(3);

echo $root;

?>
