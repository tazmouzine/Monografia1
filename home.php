<?php
	require ('page.php');
	
	$homepage = new Page ();
	
	$homepage -> SetContent('<p> welcome to the home of TLA Consulting. Please take some time to get to know us.</p>
							<p>We specialie in serving yout business need and hope to hear from you soon. </p>
							');
	$homepage -> Display();
?>