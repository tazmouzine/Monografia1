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
<script type="text/javascript" src="scripts/scriptff.js"></script>
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
			$homepage -> SetContent('<form action="process.php" method="post">
										<div id="form_webtop">	
											<div id="b1">											
												<div>
														<div>	
															<label for="description">Actual Results</label>
														</div>
														<div class="fields">
															<input type="text" id="texto" size="50" name="ar" id="description" value="" />
														</div>													
												</div>
												<div >
														<div >
															<label for="description">Expect Results</label>
														</div>
														<div class="fields">
															<input type="text" id="texto" size="50" name="er" id="description" value="" />
														</div>
												</div>
												<div>
													<label for="description">Initial Conditions</label>
														<div id="test_setup">
															<input type="text" id="texto" size="45" name="setup[]" id="description" value="" />														
														</div>
														<input type="button" id="add" name="add" value="+" onClick="addInput(\'test_setup\', \'setup[]\');" />
												</div>
												<div>												
													<label for="description">Test Steps</label>												
														<div id="test_steps">
																<input type="text" id="texto" size="45" name="step[]" id="description" value="" />														
														</div>
														<input type="button" id="add" name="add" value="+" onClick="addInput(\'test_steps\', \'step[]\');" />
												</div>
												<div>
													<label for="description">Software Version</label>
													<div class="fields">
														<input type="text" id="texto" size="45" name="swv" id="description" value="" />
													</div>
												</div>
												<div>
													<label for="description">HW Version</label>
													<div class="fields">
														<input type="text" id="texto" size="45" name="hwv" id="description" value="" />
														<select name="hType" id="texto">
															<option value="a">NS
															<option value="b">SE
															<option value="c">S        
														</select>
													</div>
												</div>									
												<div>
													<label for="description">Dock Hardware</label>
													<div>
														<select name="dType" id="texto">
															<option value="a">Whisper
															<option value="b">HD Dock/Super Dock
															<option value="c">Lapdock Premium       
															<option value=d">Lapdock Standard										   
														</select>										
														<input type="text" id="texto" size="20" name="version" id="description" value="Version" />
													</div>
												</div>									
											</div>
											<div id="b2">	
												<div>
													<label for="description">Phone Serial Number</label>
													<div>
														<input type="text" id="texto" size="45" name="PhoneSerial" id="description" value="" />
													</div>
												</div>
												<div>
													<label for="description">Test Central Information</label>
												</div>
												<div>
													<label for="description">Ciclo</label>
													<div>
														<input type="text" id="texto" size="45" name="TestCase[]" id="description" value="" />
													</div>
												</div>
												<div>
													<label for="description">Test Case</label>
													<div>
														<input type="text" id="texto" size="45" name="TestCase[]" id="description" value="" />
													</div>
												</div>										
												<div>
													<label for="description">Display resolution</label>
													<div>
														<input type="text" id="texto" size="45" name="display" id="description" value="" />
													</div>
												</div>							
												<div>
													<label for="OpMode">Operation Mode</label>
														<div>
															<select name="OpMode" id="texto">
																<option value="a">Standalone Phone Mode
																<option value="b">Function through AIW
																<option value="c">Webtop        
															</select>
														</div>											
												</div>																	
												<div>
													<label for="repeatable">Repeatable</label>
													<div>
														<select name="repeatable" id="texto">
															<option value="a">Every time
															<option value="b">Often
															<option value="c">Sometimes        
															<option value="d">Once,Twice       
														</select>
													</div>
												</div>											
												<div>
													<label for="description">More information:</label>
													<div>
														<input type="text" id="texto" size="45" name="moreInfo" id="description" value="" />
													</div>
												</div>
												<div>
													<label for="description">Attachments</label>
													<div id="attachs">
														<input type="text" id="texto" size="45" name="attachs[]" id="description" value="" />													
													</div>
													<input type="button" id="add" name="add" value="+"  onClick="addInput(\'attachs\', \'attachs[]\');" />
												</div>												
											</div>	
										</div>
										<div  style=""><input type="submit" id="send" value="Make Template"  /></div>										
									</form>																		
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
