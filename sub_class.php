<?php
$object = new subscriber;
$object->name = "Abdel-Raouf";
$object->email = "RaoufMohamed@outlook.com";
$object->password = "yxd123";
$object->phone = "010-000-239-93";
$object->display();		
	
	
class User
{
public $name, $password;
function save_user()
{
echo "save user code here";	
}
		
}	

class subscriber extends User
{
public $phone, $email;
	
function display()
{
echo "Name: ". $this->name . "<br/";
echo "Phone: ". $this->phone . "<br/";
echo "Password: ". $this->password . "<br/";
echo "email: ". $this->email;	

}

}		
	

			
?>