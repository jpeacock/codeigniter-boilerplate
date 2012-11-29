<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
	Class: Peacock
	
	General php utility functions
	
	Author: 
		John Peacock (http://clearmpls.com)
		
	License:
		MIT 
*/
class Peacock {

	/*	
		Var: $ci
		An instance of the CI super object.
	 */
	private static $ci;

	public function __construct() 
	{			
		self::init();
	}
	
	public static function init() 
	{
		self::$ci =& get_instance();
	}
	
	
	public static function meters_to_miles($meters=null) 
	{
		return number_format($meters * 0.000621371192, 3, '.', '');
	}
	
}

// End Console class
