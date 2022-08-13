<?php
	//print_r($_GET);
	include "menu.php";

	if( isset($_GET["nome"]) ){
		$nome = $_GET["nome"];
	} else {
		$nome = null;
	}
	echo "<p>O nome digitado é: {$nome}</p>";

	if(isset($_GET["idade"])){
		$idade = $_GET["idade"];
	} else {
		$idade = null;
	}