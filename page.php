<?php 
class Page
{

	//atributos da classe Page
    var $content;
    var $title = 'CR Template Builder';
    var $keywords = 'CR Template Builder';
	var $footext = 'Monografia - Grupo: Alex Candido e Tales Mouzine';
    var $buttons = array(	'Home' => 'processorder.php?equipe=a',
    						'Contact' => 'contato2.php'							
                         );                  
	// operações da classe Page
    
    function SetContent($newcontent){
    	$this->content = $newcontent;
     	}
          
    function SetTitle($newtitle){
     	$this->title = ($newtitle);
        }
    
    function SetKeywords($newkeywords){
     	$this->keywords = ($newkeywords);
        }
        
    function SetButtons($newbuttons){
     	$this->buttons = ($newbuttons);
        }
	function SetFootText($newfoot){
     	$this->footext = ($newfoot);
        }
        
    function Display(){
     	echo "<html>\n<head>\n";
        $this -> DisplayTitle();
        $this -> DisplayKeywords();
        $this -> DisplayStyles();
        echo "</head>\n<body>\n";
        $this -> DisplayHeader();
        $this -> DisplayMenu($this->buttons);        
        }
	
	function Display2(){
		echo "<div id='content'>";
		echo $this->content;
        echo "</div>";
		$this -> DisplayFooter();
        echo "</body>\n</html>\n";
        }
    
    function DisplayTitle(){
    	echo "<title> $this->title </title>\n";
        }
    
    function DisplayKeywords(){
    	echo "<META name=\"keywords\" content=\"$this->keywords\">\n";
        }
    
    function DisplayStyles()
    {
   ?>
   		<style type="text/css">
		* {padding:0; margin:0;}
		h1 {color:#FFFFFF; font-size:12px; text-align:center; font-family:Arial, Helvetica, sans-serif;}
		.menu {color:#FFFFFF; font-size:9px; text-align:center; font-family:Arial, Helvetica, sans-serif; font-weight:bold;}
		td{background:#000000;}
		p {color:#000000; font-size:12px; text-align:justify; font-family:Arial, Helvetica, sans-serif;}
		p.foot {color:#FFFFFF; font-size:9px; text-align:center;font-family:Arial, Helvetica, sans-serif; font-weight:bold;}
		a:link,a:visited,a:active{color:#FFFFFF;}
		#content { float: none}
		.labels { text-align: right; width: 50%;}
		.fields { text-align: left; width: 70%;}
		#botao {width: 80px}
		#form { width: 80%}
		#footer {color:#555658;	text-align:center;	font-family:Arial, Helvetica, sans-serif;	font-size:14px;	width:100%;	bottom:0px;	float:none;	height: 22px;	background:#333333;}
		</style>
    <?php
    }
    
    function DisplayHeader(){
		?>
		<table width="100%" cellpadding="12" cellspacing="0" border="0">
        <tr bgcolor="#000000">
        	<td align="left"></td>
            <td>
            	<h1>CR Description Template Builder</h1>
            </td>
            <td align="right"></td>
         </tr>
         </table>
         <?php
         }
    
    function DisplayMenu($buttons){
    	echo "<div style='width:100%;background:#000; heigth:30px;text-align:center;'>";
        $width = 100/count($buttons);
        
        while (list($name, $url) = each($buttons)){
        	$this -> DisplayButton($width, $name, $url, !$this->IsURLCurrentPage($url));
            }
        
        echo "</div>";
        }
        
    function IsURLCurrentPage($url){
    	if(strpos( $_SERVER['SCRIPT_NAME'], $url )==false){
        	return false;
            }
        else{
        	return true;
            }
    }
    
    function DisplayButton($width, $name, $url, $active = true){
    	if($active==true){
        	echo "<td width='$width%'>            							
                  <a href='$url'><span class='menu'>$name</span></a></td>";
        }else{
        	echo "<td width='$width%'>
                  <a href='$url'><span class='menu'>$name</span></td></a>";
        }
     }
     
     function DisplayFooter(){
     echo 
     	"<div id='footer' style='width:100%;background:#000000; height:60px;'>
        	<p class='foot'>&copy;".$this->footext."</p>
            <p class='foot'>Please see our <a href='contato2.php'>legal information page</a></p>
        </div>";     
     }
 }
?> 