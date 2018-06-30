<?php
	session_start();
	require_once("Conexao.php");
	$con = new Conexao();
	$email = $_GET["email"];
	$ex = array("<",">","'","'","/","*","-","+",",",":",";","?","/","°","[","]","{","}","º","°","ª","=","!","#","$","%","¨","¬","(",")",'"');
	$emailUsr = str_replace($ex, "", $email);
	if($emailUsr == ""){
		echo "<br /><span class='respostaUsrFalse'>Preencha este campo!</span>";
		$_SESSION["emailLivre"] = false;
	}else{
		$verificarEmail = "SELECT * FROM usuarios WHERE email LIKE '?%';";
		$verificandoEmail = $con->getCon()->prepare($verificarEmail);
		$verificandoEmail->bindParam(1, $emailUsr);
		$verificandoEmail->execute();
		$email = $verificandoEmail->fetch(PDO::FETCH_OBJ);
		if($email->rowCount > 0){
			echo "<br /><span class='respostaEmailFalse'>{$emailUsr} já cadastrado =(</span>";
			$_SESSION["emailLivre"] = false;
		}else{
			echo "<br /><span class='respostaEmailTrue'>Email disponível =)</span><br /><br />
					Email: {$emailUsr}
			";
			$_SESSION["emailLivre"] = true;
		}
	}
?>