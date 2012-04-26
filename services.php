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
				$this -> DisplayMenu($this->row2buttons);
				echo $this->content;
				$this -> DisplayFooter();
				echo "</body>\n</html>\n";
		}
	}
	
	$services = new ServicePage();
	
	$services -> SetContent('<p> welcome to the home of TLA Consulting. Please take some time to get to know us.</p>
							<p>We specialie in serving yout business need and hope to hear from you soon. </p>
							<p> welcome to the home of TLA Consulting. Please take some time to get to know us.</p>
							<p>We specialie in serving yout business need and hope to hear from you soon. </p>
							<p> welcome to the home of TLA Consulting. Please take some time to get to know us.</p>
							<p>We specialie in serving yout business need and hope to hear from you soon. </p>
							');	
	$services -> Display();
?>
