<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutus extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
	//	$this->load->library('session');
	     
	   
	}
	
	
	public function index()
	{
		
		$session = [];
		$header = [];
		$result = [];
		
		$page = "webview/pages/about_us.php";

		
		webview_helper($result, $page, $header, $session);
	
	}


	public function school_group()
	{
		
		$session = [];
		$header = [];
		$result = [];
		
		$page = "webview/pages/school_group.php";

		
		webview_helper($result, $page, $header, $session);
	
	}


	public function management()
	{
		
		$session = [];
		$header = [];
		$result = [];
		
		$page = "webview/pages/about_management.php";

		
		webview_helper($result, $page, $header, $session);
	
	}


}//end of class