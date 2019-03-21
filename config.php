<?php

spl_autoload_register(function ($class_nome){
	
	$filename="class".DIRECTORY_SEPARATOR.$class_nome.".php";
	if (file_exists(($filename))){
		
		require_once($filename);
	}
});

?>