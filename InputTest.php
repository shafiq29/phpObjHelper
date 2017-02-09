<?php
require "Input.php";
class InputTest extends PHPUnit_Framework_TestCase{
	public function testCanLoadFromGlobals(){
		$_Get['shafiq']='Hello';
		$input= Input::createFromGlobals();
		
	}
}

?>