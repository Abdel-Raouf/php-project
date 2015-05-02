<?php 

$paper = array('copier' => "Copier & Multipurpose",
               'inkjet' => "Inkjet Printer", 
			   'laser' => "Laser Printer", 
			   'photo' => "Photographic Paper");
			   
while(list($rofa,$ahmed) = each($paper))
{
	echo "$rofa: $ahmed <br/>";
}				   
			   
?>