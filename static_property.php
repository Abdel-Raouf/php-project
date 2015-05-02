<?php
$temp = new Test();
echo "Test A: " . Test::$static_property . "<br />";
//accessing static property directly from the class. 
echo "Test B: " . $temp->get_sp() . "<br />"; 
//accessing static property by calling method with and object.
echo "Test C: " . $temp->static_property . "<br />";
//failed to access method due to an object(or occurance, or instance) can't access a static property directly, object can access static property only by calling a method that refer to the static property.

class Test

{
static $static_property = "I'm static";

function get_sp()
{

return self::$static_property;
//Note how the method get_sp accesses $static_property using the keyword self. This is the way in which a static property or constant can be directly accessed within a class.

} 

}


?>

