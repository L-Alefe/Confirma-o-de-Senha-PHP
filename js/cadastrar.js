var campoNome = document.getElementById("campoNome");
var campoEmail = document.getElementById("campoEmail");
var campoSenha = document.getElementById("campoSenha");
var campoSenhaConf = document.getElementById("campoSenhaConf");
var respostaNome = document.getElementById("respostaNome");
var respostaEmail = document.getElementById("respostaEmail");
var respostaSenha = document.getElementById("respostaSenha");
var respostaSenhaConf = document.getElementById("respostaSenhaConf");

campoNome.onblur = function(){
	requisitarArquivo("php/respostaNome.php?nome="+campoNome.value, respostaNome);
};

campoEmail.onblur = function(){
	requisitarArquivo("php/respostaEmail.php?email="+campoEmail.value, respostaEmail);
};

campoSenha.onblur = function(){
	requisitarArquivo("php/respostaSenha.php?senha="+campoSenha.value, respostaSenha);
}

campoSenhaConf.onblur = function(){
	requisitarArquivo("php/respostaSenhaConf.php?senhaConf="+campoSenhaConf.value, respostaSenhaConf);
}

var formCadastro = document.forms.formCadastro;
formCadastro.onsubmit = function(){
	var senhaValue = formCadastro.campoSenha.value;
	var cSenhaValue = formCadastro.campoSenhaConf.value;
	if(senhaValue.length < 7){
		alert("Senha menor que 7 (sete) caracteres...");
		return false;
	}else if(senhaValue != cSenhaValue){
		alert("Confirmação de senhas inválida...");
		return false;
	}else{
		return true;
	}
};