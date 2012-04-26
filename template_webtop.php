<?php 
class Template
{
	// operações da classe Template	
   
    function DisplayActualR($ar){		
    	echo "=== Reproducing the issue ===<br />
		[Actual Results]<br />1.".$ar."<br />";			
	}		
	function DisplayExpectR($er){
    	echo "[Expect Results]<br />1.".$er."<br />";
    }		
	function DisplayInitialC($setup){
    	$a = 1;		
		echo "----------------------------------------------------------------------<br />[ Setup steps or settings ]<br />";
        if( strlen($setup[0]) != 0 ){
			foreach($setup as $setupSteps){
				if( strlen($setupSteps) != 0 ){
				echo $a.".".$setupSteps.".<br />";			
				$a++;
				}
			}
		}else{
			echo "N/A <br />";
		}		
	}   
	function DisplayTestS($step){
		$a = 1;
		echo "----------------------------------------------------------------------<br />[ Steps to reproduce ]<br />";
		if( strlen($step[0]) != 0 ){
		foreach($step as $steps){
			if( strlen($steps) != 0 ){
			echo $a.".".$steps.".<br />";
			$a++;
			}		
		}
		}else{
			echo "N/A <br />";
		}
	}
	function DisplaySV($swv){
		echo "=== Additional information === <br />Software Version: ".$swv."<br />";
	}	
	function DisplayHWV($hwv){
		echo "HW Version: ".$hwv." ";
	}
	function DisplayHtype($hType){
		switch($hType)
		{
		case 'a' :
				echo "[NS]<br />";
				break;
		case 'b' :
				echo "[SE]<br />";
				break;
		case 'c' :
				echo "[S]<br />";
				break;
		}
	}		
	function DisplayDockH($dType){
		echo "Dock Hardware: ";
		switch($dType)
		{
		case 'a' :
				echo "Whisper - ";
				break;
		case 'b' :
				echo "HD Dock/Super Dock - ";
				break;
		case 'c' :
				echo "Lapdock Premium - ";
				break;
		case 'd' :
				echo "Lapdock Standard - ";
				break;
		}
	}
	function DisplayDockV($version){
		echo "(".$version.")<br />";
	}
	function DisplayPSN($PhoneSerial){
		echo "Serial Number: ".$PhoneSerial."<br />";
	}	
	function DisplayTestID($testCase){
		echo "------------------------------------------------------------------------<br />[ Test Centeral Information]<br />
			 Ciclo: ".$testCase[0]."<br />
			 Test Case: ".$testCase[1]."<br />";
	}	
	function DisplayResolution($display){
		echo "------------------------------------------------------------------------<br />[ Display resolution ]<br />";
		if( strlen($display) != 0 ){
			echo $display."<br />";
			}else{
			echo "Auto.<br />";
		}			
	}	
	function DisplayOpMode($OpMode){
		echo "------------------------------------------------------------------------<br />[ Operation Mode ] <br />";
		switch($OpMode)
		{
		case 'a' :
				echo "Standalone Phone Mode<br />";
				break;
		case 'b' :
				echo "Function through AIW<br />";
				break;
		case 'c' :
				echo "Webtop<br />";
				break;
		} 
	}	
	function DisplayRepeatable($repeatable, $moreInfo){
		echo "------------------------------------------------------------------------<br />Repeatable: ";
		switch($repeatable)
		{
		case 'a' :
				echo "Every time <br />";
				break;
		case 'b' :
				echo "Often <br />";
				break;
		case 'c' :
				echo "Sometimes<br />";
				break;
		case 'd' :
				echo "Once,Twice<br />";
				break;
		}
		if( strlen($moreInfo) != 0 ){
			echo "More info:".$moreInfo."<br />";
		}
	}
	function DisplayAttach($attach){
		$a = 1;
		echo "------------------------------------------------------------------------<br />[ Attachments ]<br />";		
		if (strlen($attach[0]) != 0){
			foreach($attach as $attachs){
				if( strlen($attachs) != 0 ){
				echo $a.".".$attachs.".<br />";
				$a++;
				}			
			}		
		}else{
			echo "N/A <br />";
		}
	}    
 }
?> 