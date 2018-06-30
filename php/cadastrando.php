<?php
	session_start();
	if($_SESSION["nomeLivre"]){
		if($_SESSION["emailLivre"]){
			if($_SESSION["senhaLivre"]){
				echo "Tudo certo!";
			}else{
				echo "senha Errada";
			}
		}else{
			echo "email Errado";
		}
	}else{
		echo "nome Errado";
	}
?>