<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<style type="text/css">
#tabela{
	width:200px;	
	height:25px;
	text-align:center;
	background:#CCCCCC;
}
#tabela2{
	width:200px;	
	height:20px;
	text-align:center;
}
#col2{
	width:49%;
	float:left;
	border:#FF0000 solid 1px;
	text-align:center;
}
#col3{
	width:49%;
	float:right;
	border:#000000 solid 1px;
	text-align:center;
}
</style>

<body>
<div id="tabela">
<div id="col2">Distancia</div>
<div id="col3">Custo</div>
</div>
<?php 
	$distancia = 50;
	while ($distancia <=250)
	{
		echo "<div id='tabela2'>";
		echo "<div id='col2'>$distancia</div>";
		echo "<div id='col3'>". $distancia /10 ."</div>";
		echo "</div>";
		$distancia += 50;
	}
	
?>
<div id="tabela">
<div id="col2">Distancia</div>
<div id="col3">Custo</div>
</div>
<?php 
	for($distancia = 50; $distancia <= 250; $distancia +=50)
	{
		echo "<div id='tabela2'>";
		echo "<div id='col2'>$distancia</div>";
		echo "<div id='col3'>". $distancia /10 ."</div>";
		echo "</div>";
	}
?>
</body>
</html>
