<?php 
require ('repositorio.php');
class Template
{
	// operações da classe Template	
	function DisplaySumary($sumary){		
    	echo "<div id='sumary'> Sumary:	<input type='text' size='60' value='".ucfirst($sumary)."'/><br />";			
	}	
    function DisplayActualR($ar){		
    	echo "<div id='dscr'>=== Reproducing the issue ===<br />
		[Actual Results]<br />1. ".ucfirst($ar).".<br />";			
	}		
	function DisplayExpectR($er){
    	echo "[Expect Results]<br />1. ".ucfirst($er).".<br /><br />";
    }		
	function DisplayInitialC($setup){
    	$a = 1;	
		echo "----------------------------------------------------------------------<br />[ Setup steps or settings ]<br />";
        foreach($setup as $setupSteps){
		   if(strlen($setupSteps) != 0 ){
			   if($a > 1){
				   echo ";<br />";
			   }
			   echo $a.". ".ucfirst($setupSteps);
				   $a++;
			}  
		}
		if($a > 1){echo ".<br />";}		
		if($a == 1){echo "N/A.<br />";}	
	}   
	function DisplayTestS($step){
		$a = 1;
		echo "----------------------------------------------------------------------<br />[ Steps to reproduce ]<br />";		
		foreach($step as $setupSteps){
		   if(strlen($setupSteps) != 0 ){
			   if($a > 1){
				   echo ";<br />";
			   }
				   echo $a.". ".ucfirst($setupSteps);
				   $a++;
			   }  
		}
		if($a > 1){echo ".<br />";}	
		if($a == 1){echo "N/A.<br />";}
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
		echo "------------------------------------------------------------------------<br />[ Attachments ]<br />";		
		foreach($attach as $setupSteps){
			   if(strlen($setupSteps) != 0 ){
					   if($a > 1){
							   echo ";<br />";
					   }
					   echo $a.". ".ucfirst($setupSteps);
					   $a++;
			   }  
		}
		if($a > 1){echo ".<br />";}
		if($a == 1){echo "N/A.<br /></div>";}		
	}    
 }
?> 