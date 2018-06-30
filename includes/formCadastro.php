<?php
	echo "
	<div class='div-form'>
		<p class='sublinhado'>Caracteres especiais serão removidos</p>
		<br />
		<form action='php/cadastrando.php' method='post' name='formCadastro'>
			<label for='campoNome'>Nome: </label>
			<br />
			<input type='text' id='campoNome' name='campoNome' placeholder='Nome' required/>
			<br />
			<div id='respostaNome'></div>
			<br />

			<label for='campoEmail'>Email: </label>
			<br />
			<input type='email' id='campoEmail' name='campoEmail' placeholder='Email' required/>
			<br />
			<div id='respostaEmail'></div>
			<br />

			<label for='campoSenha'>Senha: </label>
			<br />
			<input type='password' id='campoSenha' name='campoSenha' placeholder='*******' required/>
			<br />
			<div id='respostaSenha'></div>
			<br />

			<label for='campoSenhaConf'>Confirme sua senha: </label>
			<br />
			<input type='password' id='campoSenhaConf' name='campoSenhaConf' placeholder='*******' required/>
			<br />
			<div id='respostaSenhaConf'></div>
			<br />

			<input type='submit' value='Cadastrar' />
		</form>
		<br />
	</div>
	";
?>
