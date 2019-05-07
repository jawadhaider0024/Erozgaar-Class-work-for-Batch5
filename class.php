<?php
class human{
	Public $name,$password;

	}
/**
 * 
 */
class student extends human
{
	public $email,$phone;
	function display()
	{
		echo "Name:".$this->name."<br>";
		echo "password:".$this->password."<br>";
		echo "email:".$this->email."<br>";
		echo "phone:".$this->phone."<br>";
	}
}
$object=new student;
$object->name="Fred";
$object->password="mypass";
$object->email="jagsdfjhsds@gmail.com";
$object->phone="982735732";
$object->display();


die();
class users{
	public $name;
}
$object1=new users;
$object1->name="Alice";
$object2=clone $object1;
$object2->name="Amy";
echo "Object1 Name is:".$object1->name."<br>";
echo "Object2 Name is:".$object2->name."<br>"; 
die(); 
/**
 * 
 */
class user
{
	
	public $name,$password;
	function save_user(){
		echo "Save user code goes here";
	}
}

$object=new user;
// print_r($object);
$object->name="JOE";
$object->password="abcd";

print_r($object);
$object->save_user();
 ?>