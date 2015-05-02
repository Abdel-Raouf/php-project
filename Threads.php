<?php //refering to a variabl's value not the value itself, by creating a Thread using &


$a1 = "WILLIAM"; 

$a2 = "henry"; 

$a3 = "gatES";



fix_names($a1, $a2, $a3);

echo $a1 . " " . $a2 . " " . $a3;

function fix_names(&$n1, &$n2, &$n3)

{

$n1 = ucfirst(strtolower($n1)); 

$n2 = ucfirst(strtolower($n2)); 

$n3 = ucfirst(strtolower($n3));

} 


?>