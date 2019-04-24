<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Dir extends CI_Controller{
	
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
      
    }

	
	public function index(){
        echo $dir1 = $_SERVER['DOCUMENT_ROOT'].'/directory';

        if (!file_exists($dir1)) {
            mkdir($dir1, 0777, true);
        }{
            echo "already exist";
        
        $Your_file_path=$dir1.'/123.txt';
        if(file_exists($Your_file_path)){
        unlink($Your_file_path);	
        }

    }


}
}