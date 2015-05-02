<?php
$p1 = array("Copier", "Inkjet", "Laser", "Photo");
echo "p1 element: " . $p1[2] . "<br>";

$p2 = array('copier' => "Copier & Multipurpose", 
            'inkjet' => "Inkjet Printer",
            'laser' => "Laser Printer", 
			'photo' => "Photographic Paper");
echo "p2 element: " . $p2['inkjet'] . "<br>"; 

// Adding items to an array using the array keyword (using numeric indexing to refer to the product i want in the first section of the code, in the second section of code using associative arrays by refer to the name (unique name or key ) .

?>