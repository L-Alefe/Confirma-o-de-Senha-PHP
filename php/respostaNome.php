<?php
	session_start();
	require_once("Conexao.php");
	$con = new Conexao();
	$nome = $_GET["nome"];
	$ex = array("<",">","'","'","/","*","-","+",",",".",":",";","?","/","°","[","]","{","}","º","°","ª","=","_","!","@","#","$","%","¨","¬","&","*","(",")","1","2","3","4","5","6","7","8","9","0",'""','""');
	$nomeUsr = str_replace($ex, "", $nome);
	if($nomeUsr == ""){
		echo "<br /><span class='respostaUsrFalse'>Preencha este campo!</span>";
		$_SESSION["nomeLivre"] = false;
	}else{
		$verificarNome = "SELECT * FROM usuarios WHERE nome LIKE '?%';";
		$verificandoNome = $con->getCon()->prepare($verificarNome);
		$verificandoNome->bindParam(1, $nomeUsr);
		$verificandoNome->execute();
		$nomes = $verificandoNome->fetch(PDO::FETCH_OBJ);
		if($nomes->rowCount > 0){
			echo "<br /><span class='respostaUsrFalse'>{$nomeUsr} já cadastrado =(</span>";
			$_SESSION["nomeLivre"] = false;
		}else{
			echo "<br /><span class='respostaUsrTrue'>Usuário disponível =)</span><br /><br />
					User: {$nomeUsr}";
			$_SESSION["nomeLivre"] = true;
		}
	}
?>