<?php
	session_start();
	$senhaConf = $_GET["senhaConf"];
	if($senhaConf == "" && $_SESSION["senha"] == ""){
		echo "<br /><span class='respostaUsrFalse'>Senhas não preenchidas!</span>";
	}else if(strlen($senhaConf) < 7 && strlen($_SESSION["senha"]) < 7){
		echo "<br /><span class='respostaUsrFalse'>Senhas muito curtas!</span>";
	}else if($_SESSION["senha"] == $senhaConf && $_SESSION["senhaLivre"] == true){
		echo "<br /><span class='respostaUsrTrue'>Senhas aceitas!</span>";
	}else{
		echo "<br /><span class='respostaUsrFalse'>Senhas diferentes!</span>";
	}
?>