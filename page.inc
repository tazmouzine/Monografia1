<?php 
class Page
{

	//atributos da classe Page
    var $content;
    var $title = 'CR Template Builder';
    var $keywords = 'CR Template Builder';
	var $footer = 'Monografia - Grupo: Alex Candido e Tales Mouzine';
    var $buttons = array(	'Home' => 'orderform.html',
    						'Contact' => 'contato2.php',
                            'Services' => 'services.php',
                            'Site Map' => 'map.php',
							'Inverte String' => 'is.php'							
                         );
    var $urlinverte;                     
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
        
    function Display(){
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
		#footer {color:#555658;	text-align:center;	font-family:Arial, Helvetica, sans-serif;	font-size:14px;	position:fixed;	width:100%;	bottom:0px;	float:none;	height: 22px;	background:#333333;}
		</style>
    <?php
    }
    
    function DisplayHeader(){
		?>
		<table width="100%" cellpadding="12" cellspacing="0" border="0">
        <tr bgcolor="#000000">
        	<td align="left"></td>
            <td>
            	<h1>TLA Consulting Pty Ltd</h1>
            </td>
            <td align="right"><img src="imagens/logo2.png" /></td>
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
    	if(strpos( $GLOBALS['SCRIPT_NAME'], $url )==false){
        	return flase;
            }
        else{
        	return true;
            }
    }
    
    function DisplayButton($width, $name, $url, $active = true){
    	if($active==true){
        	echo "<td width='$width%'>            		
					<img src='imagens/s-logo.gif' alt='$name' border='0' />
                    <a href='$url'><span class='menu'>$name</span></a></td>";
        }else{
        	echo "<td width='$width%'><img src='imagens/side-logo.gif' />
            <a href='$url'><span class='menu'>$name</span></td></a>";
        }
     }
     
     function DisplayFooter(){
     ?>
     	<div id="footer" style="width:100%;background:#000000; height:60px;">
        	<p class="foot">&copy; <?php>echo $footer</?></p>
            <p class="foot">Please see our <a href="">legal information page</a></p>
        </div>
     <?php
     }
 }
?> 