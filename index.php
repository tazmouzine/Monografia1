<?php
require_once ('repositorio.php');
$footext = 'Monografia - Grupo: Alex Candido e Tales Mouzine';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CREaT Tool</title>
</head>

<style type="text/css">
@import url(css/template.css);
</style>


<body>
<div id="logo"><img src="imagens/logo.png" /></div>
		<div id="content">
			<div id="form">
				<form action="processorder.php" method="post">
					<div id="b1">
					<label for="equipe">Modelo de template</label><br />
					<label for="issueType">Issue type</label>					
					</div>
					<div id="b2">
					<select name="equipe">
						<option value="a">Webtop
						<option value="b">Execution
						<option value="c">Localization        
					</select><br />
					<select name="issueType">
						<?php				
						foreach($testType as $types => $descricao){
							echo '<option value=\"'.$types.'\">'.$types.' - '.$descricao;
						}
						?>
					</select>
					</div>
					<div style="width:100%; text-align:center;">
					<input type="submit" value="Enviar"  />
					</div>
				</form>
			</div>
		</div>
		<div id='footer_index' style='width:100%; height:60px;'>
        	<p class='foot'>&copy;<?php echo $footext ?></p>
            <p class='foot'>Please see our <a href='contato2.php'>legal information page</a></p>
        </div>
</body>
</html>
