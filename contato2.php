<?php
	require ('page.php');
	
	$homepage = new Page ();
	
	$homepage -> SetContent('<p class="titulo titulo2">Entre em Contato Conosco</p> 
    <div id="lado1" style="width:100%; border-right:#999999 solid 1px; margin-top:10px;">
    <form action="enviar2.php" name="contato" method="POST"><input type="hidden">
    <!-- e-mail do destinatario --> 
        <div>
            <div id="rotulo1">Nome:</div><div class="caixa1"><input type="text" size="40" name="nome" id="nome" value=""></input></div>
            <div id="rotulo1">E-mail:</div><div class="caixa1"><input type="text" size="40" name="email" id="email" value=""></input></div>
            <div id="rotulo1">Assunto:</div><div class="caixa1"><input type="text" size="40" name="assunto" id="ass" value=""></input></div>
            <div id="rotulo1">Mensagem:</div><div class="caixa1"><textarea cols="29" rows="5" id="msg" name="mensagem"></textarea></div>
        </div>
        <div> <input name="submit" type="submit" value=" Enviar " />
        &nbsp; <input name="reset" type="reset" value=" Limpar " /></div>
	</form>   
    <!-- e-mail do destinatario -->
    </div> 
      <div style="font-weight:bold; color:#666666; text-transform:uppercase; width:100%; padding-top:10px;" align="center">
        <span style="color:#FFFFFF; font-size:12px;">Se preferir, </span><span style="color:#999999;">estamos na:</span>
        <span style="color:#00CC99; font-size:18px">Rua Juarez de Castro Dourado, N&ordm; 100, Centro -</span><br /><span style="color:#D6962F"> Irec&ecirc; - Bahia</span>
        <br />
        <span style="color:#FFFFFF; font-size:12px;">Ou pode ligar pra gente:</span>
        <span style="color:#00CC99; font-size:16px;font-weight:bold;">(74) 3641-3581</span>
    </div>
							');
	$homepage -> Display();
	$homepage -> Display2();
	
?>