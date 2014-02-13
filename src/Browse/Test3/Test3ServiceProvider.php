<?php namespace Browse\Test3;

use Browse\Test3\CheckValue;

class Test3ServiceProvider {

	public static function getTest(){
		
		return CheckValue::add(4,5);//return 'here is test';
		
		}

}
