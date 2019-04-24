<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('webview_helper'))
{
    function webview_helper($body_content_data = '',$body_content_page = '',$body_content_header=[],$data,$heared_menu_content='')
    {
      
	  
	  $CI =& get_instance();
	  
	
	
	 $CI->load->library('template');
	
		 
	 $data['bodyview'] = $body_content_page;
	 //$data['leftmenusidebar'] = [];
	 $data['headermenu'] = $body_content_header;
	
	 $CI->template->setHeader($heared_menu_content);
	 $CI->template->setBody($body_content_data);
	
	
	 
	
	   $CI->template->view('webview/default_web_view', array('body'=>$body_content_page), $data);
		
	
    }   
}