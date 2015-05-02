<?php 
$object = new User();
$object->name = "Begs";
$object->password = "Safii";


echo $object->get_password();






class User

{

public $name, $password;

function get_password()


{

	return $this->password;
} 

}
?>
