<?php
$object = new Son; 
$object->test(); 
$object->test2();

class Dad
{


function test()
{
echo "[Class Dad] I am your Father<br />";
} 
 
}

class Son extends Dad
{

function test()
{
echo "[Class Son] I am Luke<br />";
}

function test2()
{
parent::test();
} 

}

//If you wish to ensure that your code calls a method from the current class, you can use the self keyword, like this:self::method();

//In cases in which you wish to prevent a subclass from overriding a superclass method, you can use the final keyword

?>
