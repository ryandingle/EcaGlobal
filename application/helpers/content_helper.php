<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function toView($page,$title,$scripts,$active1,$active2)
{
	$CI =&get_instance();
	
	$data['title'] 		= $title;
	$data['content']	= 'global_views/'.$page;
	$data['header'] 	= 'global_views/includes/header';
	$data['footer']		= 'global_views/includes/footer';
	$data['scripts']    = $scripts;
	$data['active1'] 	= $active1;
	$data['active2'] 	= $active2; 
	
	$CI->load->view('global_views/template/template', $data);
}

function  admin_view()
{
	echo 'lol';
}

?>