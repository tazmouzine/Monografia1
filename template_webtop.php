<?php 
require ('repositorio.php');
class Template
{
	// operações da classe Template	
   
    function DisplayActualR($ar){		
    	echo "=== Reproducing the issue ===<br />
		[Actual Results]<br />1. ".ucfirst($ar).".<br />";			
	}		
	function DisplayExpectR($er){
    	echo "[Expect Results]<br />1. ".ucfirst($er).".<br /><br />";
    }		
	function DisplayInitialC($setup){
    	$a = 1;	
		$num_elem = count($setup);
		echo "----------------------------------------------------------------------<br />[ Setup steps or settings ]<br />";
        if( strlen($setup[0]) != 0 ){
			foreach($setup as $setupSteps){
				if( strlen($setupSteps) != 0 ){
				if($a == $num_elem){
					echo $a.". ".ucfirst($setupSteps).".<br />";			
				}else{
					echo $a.". ".ucfirst($setupSteps).";<br />";	
					$a++;
				}
				}
			}
			echo "<br />";
		}else{
			echo "N/A <br />";
		}		
	}   
	function DisplayTestS($step){
		$a = 1;
		$num_elem = count($step);
		echo "----------------------------------------------------------------------<br />[ Steps to reproduce ]<br />";
		if( strlen($step[0]) != 0 ){
			foreach($step as $steps){
				if( strlen($steps) != 0 ){
					if($a == $num_elem){
						echo $a.". ".ucfirst($steps).".<br />";			
					}else{
						echo $a.". ".ucfirst($steps).";<br />";	
						$a++;
					}
				}	
			}
			echo "<br />";
		}else{
			echo "N/A <br />";
		}
	}
	function DisplaySV($swv){
		echo "=== Additional information === <br />Software Version: ".$swv.".<br />";
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
		echo "(".$version.").<br />";
	}
	function DisplayPSN($PhoneSerial){
		echo "Serial Number: ".$PhoneSerial.".<br />";
	}	
	function DisplayTestID($testCase){
		echo "------------------------------------------------------------------------<br />[ Test Centeral Information]<br />
			 Ciclo: ".$testCase[0].".<br />
			 Test Case: ".$testCase[1].".<br />";
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
			echo "More info:".ucfirst($moreInfo).".<br />";
		}
	}
	function DisplayAttach($attach){
		$a = 1;
		$num_elem = count($attach);
		echo "------------------------------------------------------------------------<br />[ Attachments ]<br />";		
		if (strlen($attach[0]) != 0){
			foreach($attach as $attachs){
				if( strlen($attachs) != 0 ){
				if($a == $num_elem){
					echo $a.". ".ucfirst($attachs).".<br />";			
				}else{
					echo $a.". ".ucfirst($attachs).";<br />";	
					$a++;
				}
				}			
			}		
		}else{
			echo "N/A.<br />";
		}
	}    
 }
?> 