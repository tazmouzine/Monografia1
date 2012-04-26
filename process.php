<?php
require ('page.php');
require ('template_webtop.php');
// cria nomes de variaveis abreviadas
$DOCUMENT_ROOT = $HTTP_SERVER_VARS['DOCUMENT_ROOT'];

$ar = $_POST['ar'];
$er = $_POST['er'];
$setup = $_POST['setup'];
$step = $_POST['step'];
$swv = $_POST['swv'];
$hwv = $_POST['hwv'];
$hType = $_POST['hType'];
$dType = $_POST['dType'];
$version = $_POST['version'];
$phoneSerial = $_POST['PhoneSerial'];
$testCase = $_POST['TestCase'];
$display = $_POST['display'];
$OpMode = $_POST['OpMode'];
$repeatable = $_POST['repeatable'];
$moreInfo = $_POST['moreInfo'];
$attach = $_POST['attachs'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<style type="text/css">
#aviso{
width:100%;
background:#FFFF00;
border:#FF0000 1px solid;
text-align:center;		
	}
</style>
<body>
<?php
	$homepage = new Page ();
	$template = new Template ();
	$homepage -> SetTitle('Webtop Template');
	$homepage -> Display();	
	$template -> DisplayActualR($ar);
	$template -> DisplayExpectR($er);
	$template -> DisplayInitialC($setup);
	$template -> DisplayTestS($step);	
	$template -> DisplaySV($swv);
	$template -> DisplayHWV($hwv);
	$template -> DisplayHtype($hType);
	$template -> DisplayDockH($dType);
	$template -> DisplayDockV($version);
	$template -> DisplayPSN($phoneSerial);
	$template -> DisplayTestID($testCase);
	$template -> DisplayResolution($display);
	$template -> DisplayOpMode($OpMode);
	$template -> DisplayRepeatable($repeatable, $moreInfo);
	$template -> DisplayAttach($attach);
	$homepage -> Display2();
?>
</body>
</html>
