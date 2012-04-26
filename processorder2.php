<?php
// cria nomes de variaveis abreviadas
$string = $_POST ['string'];
$invert = strrev ($string);
?>
<?php
	require ('page.inc');
	
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
	
	$services -> SetContent("<form method='post'>
	<label for='string'>String Original: </label><input id='string' type='text' name='string' size='40' maxlength='200' value='$string'/><br /> 
	<label for='string'>String Invertida: </label><input id='string' type='text' name='string' size='40' maxlength='200' value='$invert' /><br />        
</form>
							");	
	$services -> Display();
?>
