<?php
$name=$http_POST_VARS['name'];
$email=$http_POST_VARS['email'];
$feedback=$http_POST_VARS['feedback'];

if(empty($name)||empty($email)||empty($feedback)){
	echo "<script>$('alerta').append('<p>Nenhum campo pode ficar em branco!</p>');</script>";
}
$toaddress = 'tazmouzine@gmail.com';
$subject = 'Contato do site';
$conteudo = 'Nome do cliente: '.$name."\n"
			.'Email do cliente: '.$email."\n"
			."Comentario: \n".$feedback."\n";
$fromaddress = 'From: tazmouzine@gmail.com';

//mail($toaddress,$subject,$conteudo,$fromaddress);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback Form</title>

<style>
#rotulo1 { 
	 
	text-align:right;
	margin-right:5px;	
	margin-top:5px;
	font-stretch:extra-expanded;
	font-weight:bold;
	color:#FFFFFF;
}

.caixa1 {
	margin-top:5px; 
	text-align:left;	
	padding-top:5px;
}
</style>
<script type="text/javascript" src="scripts/jquery-1.3.2.min.js"></script>
</head>
<body id="bd">
<div id="quadro_conteudo2">
    <p class="titulo titulo2">Entre em Contato Conosco</p> 
    <div id="lado1" style="float:left; width:500px; border-right:#999999 solid 1px; margin-top:10px;">
    <form action="" name="contato" method="POST"><input type="hidden">
    <!-- e-mail do destinatario --> 
        <div style="padding:10px;">
            <div id="rotulo1">Nome:</div><div class="caixa1"><input type="text" size="40" name="nome" id="nome" value=""></input></div>
            <div id="rotulo1">E-mail:</div><div class="caixa1"><input type="text" size="40" name="email" id="email" value=""></input></div>
            <div id="rotulo1">Assunto:</div><div class="caixa1"><input type="text" size="40" name="assunto" id="ass" value=""></input></div>
            <div id="rotulo1" style="height:157px;">Mensagem:</div><div class="caixa1"><textarea cols="29" rows="5" id="msg" name="mensagem"></textarea></div>
        </div>
        <div style="width:620px; padding-top:240px;"> <input name="submit" type="submit" value=" Enviar " />
        &nbsp; <input name="reset" type="reset" value=" Limpar " /></div>
	</form>   
    <!-- e-mail do destinatario -->
    </div> 
      <div style="font-weight:bold; color:#666666; text-transform:uppercase; float:right; width:380px; padding-top:10px;" align="center">
        <span style="color:#FFFFFF; font-size:12px;">Se preferir, </span><span style="color:#999999;">estamos na:</span>
        <span style="color:#00CC99; font-size:18px">Rua Juarez de Castro Dourado, N&ordm; 100, Centro -</span><br /><span style="color:#D6962F"> Irec&ecirc; - Bahia</span>
        <br />
        <span style="color:#FFFFFF; font-size:12px;">Ou pode ligar pra gente:</span>
        <span style="color:#00CC99; font-size:16px;font-weight:bold;">(74) 3641-3581</span>
    </div>
</div>
<div id="alerta"></div>
</body>
</html>