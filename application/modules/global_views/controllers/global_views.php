<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Global_views extends MX_Controller {

	public function __construct(){
		parent::__construct();
		//$this->load->helper('content');
	}
	
	public function index()
	{
		show_404();
	}
	
	public function show($page,$title,$scripts,$active1,$active2)
	{
		toView($page,$title,$scripts,$active1,$active2);
	}
}
