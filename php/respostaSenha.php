<?php
	session_start();
	$senha = $_GET["senha"];
	if($senha == ""){
		echo "<br /><span class='respostaUsrFalse'>Preencha este campo!</span>"; 
		$_SESSION["senhaLivre"] = false;
		$_SESSION["senha"] = $senha;
	}else if(strlen($senha) >= 7){
		$_SESSION["senhaLivre"] = true;
		$_SESSION["senha"] = $senha;
	}else{ 
		$_SESSION["senhaLivre"] = false;
		$_SESSION["senha"] = $senha;
	}
?>