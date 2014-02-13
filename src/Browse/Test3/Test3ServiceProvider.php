<?php namespace Browse\Test3;

use Browse\Check\checkValue;

class Test3ServiceProvider {

	public static function getTest(){
		
		return checkValue::add(4,5);//return 'here is test';
		
		}

}
