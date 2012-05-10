<?php
require_once ('repositorio.php');
$footext = 'Monografia - Grupo: Alex Candido e Tales Mouzine';
$arraywtTestType = implode('|', $wtTestType); 
$arrayexTestType = implode('|', $exTestType); 
$arraylocTestType = implode('|', $locTestType); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CREaT Tool</title>
<script type="text/javascript" src="scripts/jquery-1.6.1.min.js"></script>
</head>

<style type="text/css">
@import url(css/template.css);
</style>

<script type="text/javascript">
$(window).load(function() {
$('#equipe').click(function() {  
});
$('#equipe').change(function() {
 
});

});
</script>

<script type="text/javascript">
function showOptions(string_array) {			
	$('#cselected').val("Merda"+string_array);
	arraywtTestType = string_array.split('|');		

	var i;
	var x=document.getElementById("issueType");	
	for(i in arraywtTestType){
	var option=document.createElement("option");
	option.text=arraywtTestType[i];
	try
	  {
	  // for IE earlier than version 8
	  x.add(option,x.options[null]);
	  $('#cselected').val(teste);
	  }
	catch (e)
	  {
	  x.add(option,null);
	  }
	}
}

function removeOptionSelected()
{
  var elSel = document.getElementById('issueType');
  var i;
  for (i = elSel.length - 1; i>=0; i--) {    
      elSel.remove(i);   
  }
}

$(document).ready(function selectOptions() {
var teste = $('#equipe').val();
var string_array;
	switch (teste){
	case 1:		 
		var string_array;		
		string_array = '<?php echo $arraywtTestType; ?>';
		$('#cselected').val(teste);		
		showOptions(string_array);
		break;
	case 2:	
		removeOptionSelected();
		 $('#cselected').val(string_array);
		showOptions(string_array);
		break;
	case 3:
		removeOptionSelected();
		 $('#cselected').val(string_array);
		showOptions();
		break;
	default:
		$('#cselected').val(teste);
		string_array = '<?php echo $arrayexTestType; ?>';				
		showOptions(string_array);
	}
});
</script>

<body>
<div id="logo"><img src="imagens/logo.png" /></div>
		<div id="content">
			<div id="form">
				<form action="processTemplate.php" method="post">
					<div id="b1">
						<div class="label">Modelo de template</div>
						<div class="label">Test type</div>					
					</div>
					<div id="b2">
					<select name="equipe" class="texto2" id="equipe" onchange="selectOptions()">
						<option value="a">Webtop
						<option value="b">Execution
						<option value="c">Localization        
					</select><br />
					<select name="issueType" id="issueType">					
					</select>
					<input type="text" id="cselected" value="">
					</div>
					<div style="width:100%; text-align:center;">
					<input type="submit" value="Enviar"  />
					</div>
				</form>
			</div>
		</div>
		<div id='footer_index'>
        	<p class='foot'>&copy;<?php echo $footext ?></p>
            <p class='foot'>Please see our <a href='contato2.php'>legal information page</a></p>
        </div>
</body>
</html>
