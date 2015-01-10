<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MX_Controller {

	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$page  = 'pages/content';
		$title = 'Eca Global International University Pathway Program';
		$scripts = "<script type='text/javascript' src='assets/plugin/scripts/jquery.min.js'></script>
    				<script type='text/javascript' src='assets/plugin/scripts/jquery.mobile.customized.min.js'></script>
    				<script type='text/javascript' src='assets/plugin/scripts/jquery.easing.1.3.js'></script> 
    				<script type='text/javascript' src='assets/plugin/scripts/camera.min.js'></script> 
    				<script type='text/javascript' src='assets/js/scripts/do.js'></script>";
		
		$active1 = '<li id="active-first"><a href="'.base_url().'">Home</a></li>
					<li><a href="'.base_url().'">Mission</a></li>
					<li><a href="'.base_url().'">News & Events</a></li>
					<li><a href="'.base_url().'">Student Info</a></li>
					<li><a href="'.base_url().'">Locations</a></li>
					<li><a href="'.base_url().'">Programs</a></li>';
					
		$active2 = '<li class="dropdown sec-nav-li-drop">
						<a class="dropdown-toggle sep-nav" href="'.base_url().'main/about">About</a>
						<ul class="dropdown-menu">
							<li class="in-nav"><a href="'.base_url().'">ECA Global</a></li>
							<li class="in-nav"><a href="'.base_url().'">Asia Pacific International College</a></li>
							<li class="in-nav"><a href="'.base_url().'">International University Pathway Program</a></li>
						</ul>
					</li>					
					<li class="sec-nav-li" id=""><a href="'.base_url().'">Courses</a></li>
					<li class="sec-nav-li"><a href="'.base_url().'">Academics</a></li>
					<li class="sec-nav-li"><a href="'.base_url().'">Admission</a></li>
					<li class="sec-nav-li"><a href="'.base_url().'">Alumni</a></li>
					<li class="sec-nav-li"><a href="'.base_url().'">Student Life</a></li>';
		echo modules::run('global_views/show', $page, $title, $scripts, $active1, $active2, true);
	}
	public function about()
	{
		$page  = 'pages/content';
		$title = 'About | Eca Global International University Pathway Program';
		$scripts = "<script type='text/javascript' src='assets/plugin/scripts/jquery.min.js'></script>
    				<script type='text/javascript' src='assets/plugin/scripts/jquery.mobile.customized.min.js'></script>
    				<script type='text/javascript' src='assets/plugin/scripts/jquery.easing.1.3.js'></script> 
    				<script type='text/javascript' src='assets/plugin/scripts/camera.min.js'></script> 
    				<script type='text/javascript' src='assets/js/scripts/do.js'></script>";
		
		$active1 = '<li><a href="'.base_url().'">Home</a></li>
					<li><a href="'.base_url().'">Mission</a></li>
					<li><a href="'.base_url().'">News & Events</a></li>
					<li><a href="'.base_url().'">Student Info</a></li>
					<li><a href="'.base_url().'">Locations</a></li>
					<li><a href="'.base_url().'">Programs</a></li>';
					
		$active2 = '<li id="active-second" class="dropdown sec-nav-li-drop">
						<a class="dropdown-toggle sep-nav" href="'.base_url().'main/about">About</a>
						<ul class="dropdown-menu">
							<li class="in-nav"><a href="'.base_url().'">ECA Global</a></li>
							<li class="in-nav"><a href="'.base_url().'">Asia Pacific International College</a></li>
							<li class="in-nav"><a href="'.base_url().'">International University Pathway Program</a></li>
						</ul>
					</li>					
					<li class="sec-nav-li" id=""><a href="#">Courses</a></li>
					<li class="sec-nav-li"><a href="#">Academics</a></li>
					<li class="sec-nav-li"><a href="#">Admission</a></li>
					<li class="sec-nav-li"><a href="#">Alumni</a></li>
					<li class="sec-nav-li"><a href="#">Student Life</a></li>';
					
		echo modules::run('global_views/show', $page, $title, $scripts, $active1, $active2, true);
	}
}
