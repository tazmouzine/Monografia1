<?php
	require ('page.php');
	
	class ServicePage extends Page{
		private $row2buttons = array(	'Re-engineering' => 'reengineering.php',
    									'Standards Compliance' => 'standards.php',
										'Buzzword Compliance' => 'buzzword.php',
										'Missin Statements' => 'mission.php'
									 );
		public function Display() {
				echo "<html>\n<head>\n";
				$this -> DisplayTitle();
				$this -> DisplayKeywords();
				$this -> DisplayStyles();
				echo "</head>\n<body>\n";
				$this -> DisplayHeader();
				$this -> DisplayMenu($this->buttons);				
				echo $this->content;
				$this -> DisplayFooter();
				echo "</body>\n</html>\n";
		}
	}
	
	$services = new ServicePage();
	
	$services -> SetContent('<form action="processorder2.php" method="post">
	<label for="string">String Original: </label><input id="string" type="text" name="string" size="40" maxlength="200" /><br />    
    <input type="submit" value="Enviar"  />
</form>
							');	
	$services -> Display();
?>
