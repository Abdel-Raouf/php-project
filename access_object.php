<?php
$object = new User; 

$object->name = "Paul Smith";
$object->password = 42;
print_r ($object);
echo "<br/>";

$object->save_user();		


class User

{

public $name;
public $password; 



function save_user()

{
echo "Save User code goes here";
} 

}

?>