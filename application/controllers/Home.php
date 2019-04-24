<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
	//	$this->load->library('session');
	   
	   // $this->load->model('webviewmodels/homemodel','homemodel',TRUE);
	   
	}
	
	
	public function index()
	{
		
		$session = [];
		$header = [];
		$result = [];
		$where_flash_news = array('news_flash.is_active' => 'Y' );
		$news_orderby='news_flash_id desc';

		$result['flashNewsdata'] = $this->commondatamodel->getAllRecordWhereOrderBy('news_flash',$where_flash_news,$news_orderby);
		// pre($result['flashNewsdata']);
		// exit;
		
		$page = "webview/pages/index.php";

		
		webview_helper($result, $page, $header, $session);
	
	}


}//end of class