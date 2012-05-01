<?php 
class Page
{

	//atributos da classe Page
    var $content;
    var $title = 'CR Template Builder';
    var $keywords = 'CR Template Builder';
	var $footext = 'Monografia - Grupo: Alex Candido e Tales Mouzine';
    var $buttons = array(	'Home' => 'processTemplate.php?equipe=a',
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
		$this -> DisplayFooter();
		echo "</div>";
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
			@import url(css/template.css);
		</style>
    <?php
    }
    
    function DisplayHeader(){
		?> 
			<div id="logo"><a href="index.php"><img src="imagens/logo.png" /></a></div>
         <?php
         }
    
    function DisplayMenu($buttons){
    	echo "<div class='menu'>";
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
                  <a href='$url'><span class='menu teste'>$name</span></a></td>";
        }else{
        	echo "<td width='$width%'>
                  <a href='$url'><span class='menu2 teste'>$name</span></a></td>";
        }
     }
     
     function DisplayFooter(){
     echo 
     	"<div id='footer'>
        	<p class='foot'>&copy;".$this->footext."</p>
            <p class='foot'>Please see our <a href='contato2.php'>legal information page</a></p>
        </div>";     
     }
 }
?> 