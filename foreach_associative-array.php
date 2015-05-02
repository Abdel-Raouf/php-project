<?php

$paper = array('copier' => "Copier & Multipurpose",
               'inkjet' => "Inkjet Printer", 
			   'laser' => "Laser Printer", 
			   'photo' => "Photographic Paper");

foreach ($paper as $item => $description)
echo "$item: $description<br>"; 

//using foreach loop with associative array to print out all names with their description with out carring about how much they are .

?>

