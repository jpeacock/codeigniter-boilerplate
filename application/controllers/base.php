<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends MY_Controller {

	public $api_url;
	public $api_key;

    function  __construct() {
        parent::__construct();
        //$this->api_url	= $this->config->item('base_url');
		//$this->api_key 	= $this->config->item('api_key');
    }

	/*
	$this->load->view('header', $this->data);
	$this->load->view('content', $this->data);
	$this->load->view('footer');
	*/





	public function index()
	{
		echo "hello";
	}

		
		
		
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */