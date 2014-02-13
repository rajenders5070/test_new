<?php namespace Browse;

use Browse\CheckValue;

class Test3ServiceProvider {

	public static function getTest(){
		
		return CheckValue::add(4,5);//return 'here is test';
		
		}

}
