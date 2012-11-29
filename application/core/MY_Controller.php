<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct(){
	    parent::__construct();
	    
	    // minify js files		
		$js = array(
			
			array('http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'),
			array('main.js'),
			array('vendor/bootstrap.js'),
		    array('vendor/html5-3.6-respond-1.1.0.min.js')
		    
		);

		if ($this->uri->segment(1) == 'admin'){
			//$js[] = array("jquery.simplemodal.1.4.2.min.js");
			//$js[] = array("as.js");
		} else {
			//$js[] = array("user.js");
		}
		
		$this->carabiner->group('js_scripts', array('js'=>$js));

		$css = array(
			
			array('reset.css'),
			array('bootstrap-responsive.css'),
			array('bootstrap.css'),
		    array('main.css')
		    
		);

		$this->carabiner->group('css_files', array('css'=>$css));
	}

    
}