<?php
require ('page.php');
// cria nomes de variaveis abreviadas
$DOCUMENT_ROOT = $HTTP_SERVER_VARS['DOCUMENT_ROOT'];
if(strlen($_POST['equipe']) != 0){
$equipe = $_POST['equipe'];
}else{
$equipe = $_GET['equipe'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="scripts/jquery-1.6.1.min.js"></script>

<style type="text/css">
#aviso{
width:100%;
background:#FFFF00;
border:#FF0000 1px solid;
text-align:center;		
	}
</style>

<script type="text/javascript">

$(document).ready(function(){
var num = 2;		
		$('.setup').click(function(){
			$("#test_setup").append('<div class="fields" id="test_setup'+num+'"><input type="text" size="40" name="setup[]" id="setup" value=""></input><a style="color:#000" href="#" class="remove" onClick="removeSetup(test_setup'+num+')">Apagar</a><div>');
			$('#test_setup'+num).css('display','none');
			$('#test_setup'+num).slideDown();
			num++;
		});
	});
	
$(document).ready(function(){
var num = 2;		
		$('.steps').click(function(){
			$("#test_steps").append('<div class="fields" id="test_steps'+num+'"><input type="text" size="40" name="step[]" id="steps" value=""></input><a style="color:#000" href="#" class="remove" onClick="removeSteps(test_steps'+num+')">Apagar</a><div>');
			$('#test_steps'+num).css('display','none');
			$('#test_steps'+num).slideDown();
			num++;
		});
	});

$(document).ready(
function(){
var attach_num = 2;		
		$('.attach').click(function(){
			$("#attach").append('<div class="fields" id="attach'+attach_num+'"><input type="text" size="40" name="attachs[]" id="attachs" value=""></input><a style="color:#000" href="#" class="remove" onClick="removeAttach(attach'+attach_num+')">Apagar</a><div>');
			$('#attach'+attach_num).css('display','none');
			$('#attach'+attach_num).slideDown();
			attach_num++;
		});
});

function removeSetup(num){	
	var parent = document.getElementById("test_setup");
	parent.removeChild(num);
};
function removeSteps(num){	
	var parent = document.getElementById("test_steps");
	parent.removeChild(num);
};	
function removeAttach(num){	
	var parent = document.getElementById("attach");
	parent.removeChild(num);
};

count = 0;
	function addInput() {
		div = document.getElementById('attach');
		count++;
		var new_div = document.createElement('div');
		new_div.id = 'div_input'+count;		
		var new_input = document.createElement('input');
		new_input.type = 'text';
		new_input.name = 'attachs[]';
		new_input.size = '45';
		new_div.appendChild(new_input);
		var new_button = document.createElement('input');
		new_button.type = 'button';
		new_button.name = 'rmv';
		new_button.value = '-';
		new_button.setAttribute('onClick','rmvInput(\'div_input'+count+'\')');
		new_div.appendChild(new_button);
		var new_break = document.createElement('div');
		new_div.appendChild(new_break);
		div.appendChild(new_div);
	}
	function rmvInput(attach) {
		div = document.getElementById('attach');
		input = document.getElementById(attach);
		div.removeChild(input);
	}
		
</script>
</head>

<body>
<?php
	switch($equipe)
		{
		case 'a' :
		$row2buttons = array(		'Standards Compliance' => 'standards.php',
									'Buzzword Compliance' => 'buzzword.php',
									'Missin Statements' => 'mission.php'
									 );
			$homepage = new Page ();
			$homepage -> SetTitle('Webtop Template');			
			$homepage -> SetContent('<div id="form">
									<form action="process.php" method="post">
										<div>
											<div><label for="description">Actual Results</label><div class="fields"><input type="text" size="60" name="ar" id="description" value=""></input></div></div>
											<div><label for="description">Expect Results</label><div class="fields"><input type="text" size="60" name="er" id="description" value=""></input></div></div>
											<div><div class="labels"><label for="description">Initial Conditions</label></div><div class="fields" id="test_setup"><input type="text" size="40" name="setup[]" id="description" value=""></input>
											<a style="color:#000" href="#" class="setup">Mais uma linha</a></div></div>
											<div><div><label for="description">Test Steps</label></div><div id="test_steps"><div id="fields"><input type="text" size="40" name="step[]" id="description" value=""></input></div></div>
											<a style="color:#000" href="#" class="steps">Mais uma linha</a></div>
											<div><label for="description">Software Version</label><div id="fields"><input type="text" size="40" name="swv" id="description" value=""></input></div></div>
											<div><label for="description">HW Version</label><div id="fields"><input type="text" size="40" name="hwv" id="description" value=""></input></div>
											<div id="fields"><select name="hType">
													<option value="a">NS
													<option value="b">SE
													<option value="c">S        
												</select>
											</div></div>									
											<div><label for="description">Dock Hardware</label><div><select name="dType">
												<option value="a">Whisper
												<option value="b">HD Dock/Super Dock
												<option value="c">Lapdock Premium       
												<option value=d">Lapdock Standard										   
											</select>										
											<input type="text" size="40" name="version" id="description" value="Version"></input></div></div>									
											<div><label for="description">Phone Serial Number</label><div><input type="text" size="40" name="PhoneSerial" id="description" value=""></input></div></div>
											<div><label for="description">Test Central Information</label></div>
											<div><label for="description">Ciclo</label><div><input type="text" size="40" name="TestCase[]" id="description" value=""></input></div></div>
											<div><label for="description">Test Case</label><div><input type="text" size="40" name="TestCase[]" id="description" value=""></input></div></div>
											<div><label for="description">Display resolution</label><div><input type="text" size="40" name="display" id="description" value=""></input></div></div>							
											<div><label for="OpMode">Operation Mode</label><div><select name="OpMode">
												<option value="a">Standalone Phone Mode
												<option value="b">Function through AIW
												<option value="c">Webtop        
											</select></div>	</div>																	
											<div><label for="repeatable">Repeatable</label>
											<div><select name="repeatable">
												<option value="a">Every time
												<option value="b">Often
												<option value="c">Sometimes        
												<option value="d">Once,Twice       
											</select></div></div>											
											<div><label for="description">More information:</label><div><input type="text" size="40" name="moreInfo" id="description" value=""></input></div></div>
											<div><label for="description">Attachments</label><div id="attach"><div><input type="text" size="40" name="attachs[]" id="description" value=""></input></div>									</div>
											<div><input type="button" name="add" value="+" onClick="addInput();" /></div></div>
										</div>									
										<div><input type="submit" value="Enviar"  /></div>
									</form></div>
								');
			$homepage -> Display();
			$homepage -> DisplayMenu($row2buttons);
			$homepage -> Display2();
			break;
		case 'b' :				
			$homepage = new Page ();
			$homepage -> SetTitle('Webtop Template');
			$homepage -> SetContent('<p> Conteudo 2 </p>
								');
			$homepage -> Display();
			$homepage -> Display2();
			break;
		case 'c' :				
			$homepage = new Page ();
			$homepage -> SetTitle('Webtop Template');
			$homepage -> SetContent('<p> Conteudo 3 </p>
								');
			$homepage -> Display();
			$homepage -> Display2();
			break;		
		}	
?>
</body>
</html>
