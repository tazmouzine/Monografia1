<?php
	require ('page.inc');
	
	$homepage = new Page ();
	
	// aqui come�a o script
//pega as variaveis por POST
$nome      = $_POST["nome"];
$site     = $_POST["site"];
$email   = $_POST["email"];
$fone  = $_POST["fone"];
$assunto   = $_POST["assunto"];
$mensagem  = $_POST["mensagem"];

global $email; //fun��o para validar a vari�vel $email no script todo

// Proibindo que os campos fiquem em branco

if (($nome == "") || ($email == "") || ($mensagem == ""))

{
$homepage -> SetContent('<p>Nenhum campo pode ficar em branco!</p>							
							');	
}else{
// Validando o campo com E-mail
if(!eregi('^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$',$email))
{
$homepage -> SetContent('<p>Utilize um e-mail v�lido!</p>							
							');
}else{

$data      = date("d/m/y");                     //fun��o para pegar a data de envio do e-mail
$ip        = $_SERVER['REMOTE_ADDR'];           //fun��o para pegar o ip do usu�rio
$navegador = $_SERVER['HTTP_USER_AGENT'];       //fun��o para pegar o navegador do visitante
$hora      = date("H:i");                       //para pegar a hora com a fun��o date

//aqui envia o e-mail para voc�
mail ("contato@woudesign.com.br",                       //email aonde o php vai enviar os dados do form
      "$assunto",
      "Nome: $nome\nData: $data\nIp: $ip\nNavegador: $navegador\nHora: $hora\nSite: $site\nE-mail: $email\nTelefone: $fone\n\nMensagem: $mensagem",
      "From: $email"
     );

//aqui s�o as configura��es para enviar o e-mail para o visitante
$site   = "contato@woudesign.com.br";                    //o e-mail que aparecer� na caixa postal do visitante
$titulo = "Contato Wou";                  //titulo da mensagem enviada para o visitante
$msg    = "$nome, obrigado por entrar em contato conosco, em breve entraremos em contato";

//aqui envia o e-mail de auto-resposta para o visitante
mail("$email",
     "$titulo",
     "$msg",
     "From: $site"
    );
	
	$homepage -> SetContent('<p> $nome, sua mensagem foi enviada com sucesso! Estaremos retornando em breve.</p>							
							');	
}
}
$homepage -> Display();	
?>

