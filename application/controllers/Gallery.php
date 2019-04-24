<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
		$this->load->library('session');
	$this->load->model('gallerymodel','gallerymodel',TRUE);
	     
	   
	}
	
	// method for website front
	public function index()
	{
		
		 $session = [];
		 $header = [];
		 $result = [];
		
		 // $page = "webview/pages/gallery.php";
		 // webview_helper($result, $page, $header, $session);

	    $page = "webview/pages/gallery_new.php";
		$result['imageList'] = $this->gallerymodel->getAllImageList();


		$where = array('album_master.is_active' =>'Y');
		$orderby='album_master.sl_no';
		$result['albumList']=$this->commondatamodel->getAllRecordWhereOrderBy('album_master',$where,$orderby);

		webview_helper($result, $page, $header, $session);
	
	}
	// method for admin pannel
	public function galleryview()
	{
		
		$session = [];
		$header = [];
		$result = [];

		$result['imageList'] = $this->gallerymodel->getAllImageList();


		$where = array('album_master.is_active' =>'Y');
		$orderby='album_master.sl_no';
		$result['albumList']=$this->commondatamodel->getAllRecordWhereOrderBy('album_master',$where,$orderby);

		$page = 'dashboard/admin_dashboard/album/gallery/gallery_new_list';

		
		createbody_method($result, $page, $header, $session);
	
	}

	// method for website front
	public function gallerynew()
	{
		
		$session = [];
		$header = [];
		$result = [];
        $page = "webview/pages/gallery_new.php";
		$result['imageList'] = $this->gallerymodel->getAllImageList();


		$where = array('album_master.is_active' =>'Y');
		$orderby='album_master.sl_no';
		$result['albumList']=$this->commondatamodel->getAllRecordWhereOrderBy('album_master',$where,$orderby);

		

		
		webview_helper($result, $page, $header, $session);
	
	}

	// method for website front
	public function video()
	{
		
		$session = [];
		$header = [];
		$result = [];
		
		$page = "webview/pages/video.php";

		
		webview_helper($result, $page, $header, $session);
	
	}

   // method for admin panel
	public function addImage()
	{ 
		$session = $this->session->userdata('user_data');
		if($this->session->userdata('user_data'))
		{
			if (($this->uri->rsegment(3) == NULL))
			{
				$result['mode'] = "ADD";
				$result['btnText'] = "Save";
				$result['btnTextLoader'] = "Saving...";
				$eventsID = 0;
				$result['galleryEditdata'] = [];
				
				//getAllRecordWhereOrderBy($table,$where,$orderby)
				
			
				
			
			}
			else
			{
				$result['mode'] = "EDIT";
				$result['btnText'] = "Update";
				$result['btnTextLoader'] = "Updating...";
				$eventsID = $this->uri->segment(3);
				
				
				
			}

			$result['albumList']=$this->commondatamodel->getAllDropdownData('album_master');
			//pre($result['albumList']);

			$header = "";
			$page = 'dashboard/admin_dashboard/album/gallery/gallery_add_edit_view';
			
			createbody_method($result, $page, $header,$session);
		}
		else
		{
			redirect('administratorpanel','refresh');
		}
	}

   // method for admin pannel
	public function saveGalleryImage()
	{
		if($this->session->userdata('user_data'))
		{
			$notice_array = array();
			$user_activity = array();
			$tbl_name = array();
		
			$session = $this->session->userdata('user_data');
			$galleryID = trim($this->input->post('galleryID'));
			$album = trim($this->input->post('album'));
			$mode = trim($this->input->post('mode'));
			$albumwhere = array('album_master.album_id' =>$album);
			
			$albumData=$this->commondatamodel->getSingleRowByWhereCls('album_master',$albumwhere);
			
			$img_loc= $albumData->img_loc;
			$folder=$albumData->directory;
			

			

			$dirname=$folder.'/small';
			

           // $dir1 = $_SERVER['DOCUMENT_ROOT'].'/kecarmel/'.$img_loc.$dirname; // local
            $dir1 = $_SERVER['DOCUMENT_ROOT'].'/'.$img_loc.$dirname; // server
          

			 $config1 = array(
			'upload_path' => $dir1,
			'allowed_types' => 'docx|doc|pdf|jpg|png|txt|xls|xlsx',
			'allowed_types' => '*',
			'max_size' => '5120', // Can be set to particular file size , here it is 2 MB(2048 Kb)
			'max_filename' => '255',
			'encrypt_name' => TRUE,
			);



			$this->load->library('upload', $config1);
			 $this->upload->initialize($config1);

			if ($this->upload->do_upload('fileName'))
			{ 
	            
	            $file_detail = $this->upload->data();
	           // pre($file_detail);
	            // $file_name = $file_detail['file_name']; 
	           // $file_name = $file_detail['orig_name']; 
	            $random_file_name_small=$file_detail['file_name'];
	            $user_file_name_small=$file_detail['orig_name'];


	        }

	         $dirname2=$folder.'/big';
	        // $dir2 = $_SERVER['DOCUMENT_ROOT'].'/kecarmel/'.$img_loc.$dirname2; // local
	          $dir2 = $_SERVER['DOCUMENT_ROOT'].'/'.$img_loc.$dirname2; // server
	         $config2 = array(
			'upload_path' => $dir2,
			'allowed_types' => 'docx|doc|pdf|jpg|png|txt|xls|xlsx',
			'allowed_types' => '*',
			'max_size' => '5120', // Can be set to particular file size , here it is 2 MB(2048 Kb)
			'max_filename' => '255',
			'encrypt_name' => TRUE,
			);

	         $this->load->library('upload', $config2);
	         $this->upload->initialize($config2);
	        if ($this->upload->do_upload('fileName2'))
			{ 
	            
	            $file_detail = $this->upload->data();
	            //pre($file_detail);
	            $random_file_name_big = $file_detail['file_name']; 
	            $user_file_name_big = $file_detail['orig_name']; 


	        }
			

			if($galleryID>0 && $mode=="EDIT")
			{
			
	
				$updateData = 1;
				if($updateData)
				{
					$json_response = array(
						"msg_status" => 1,
						"msg_data" => "Updated successfully"
					);
				}
				else
				{
					$json_response = array(
						"msg_status" => 0,
						"msg_data" => "Error : There is some problem while saving ...Please try again."
					);
				}		
			}
			else
			{
				
				  $insert_array = array(
		                                'album_master_id' => $album,
		                                'random_file_name_big' => $random_file_name_big,
		                                'user_file_name_big' => $user_file_name_big,
		                                'random_file_name_small' => $random_file_name_small,
		                                'user_file_name_small' => $user_file_name_small,
		                                'created_by' => $session['userid'],
		                                'is_active' => 'Y'
		                                );
					
							$insertData = $this->commondatamodel->insertSingleTableData('gallery_images_all',$insert_array);
				if($insertData)
				{
					$json_response = array(
						"msg_status" => 1,
						"msg_data" => "Saved successfully"
					);
				}
				else
				{
					$json_response = array(
						"msg_status" => 0,
						"msg_data" => "Error : There is some problem while saving ...Please try again."
					);
				}				
					
				
				    
			}
			
				
			header('Content-Type: application/json');
			echo json_encode( $json_response );
			exit;
			
			
		}
		else
		{
			redirect('login','refresh');
		}
	}


// method for admin panel
	/* delete gallery image*/

	public function deleteGalleryImage()
	{
		
		$session = $this->session->userdata('user_data');
		if($this->session->userdata('user_data'))
		{
			$imageid = trim($this->input->post('imageid'));
		
			$imageData=$this->gallerymodel->getImageDetailsForDeleteFile($imageid);

			$img_loc= $imageData->img_loc;
			$folder=$imageData->directory;
			$random_file_name_big=$imageData->random_file_name_big;
			$random_file_name_small=$imageData->random_file_name_small;

			$dirnamesmall=$folder.'/small';
			$dirnamebig=$folder.'/big';
			

           // $smallimageloc = $_SERVER['DOCUMENT_ROOT'].'/kecarmel/'.$img_loc.$dirnamesmall.'/'.$random_file_name_small; // local
            $smallimageloc = $_SERVER['DOCUMENT_ROOT'].'/'.$img_loc.$dirnamesmall.'/'.$random_file_name_small; // server

           //  $bigimageloc = $_SERVER['DOCUMENT_ROOT'].'/kecarmel/'.$img_loc.$dirnamebig.'/'.$random_file_name_big; // local
            $bigimageloc = $_SERVER['DOCUMENT_ROOT'].'/'.$img_loc.$dirnamebig.'/'.$random_file_name_big; // server
          
			//pre($imageData);
			
			$where_image = array(
				"gallery_images_all.id" => $imageid
				);
	
			
			
			
				$delete = $this->commondatamodel->DeleteData('gallery_images_all',$where_image);
				
			if($delete)
			{
				   // delete from big folder
					if(file_exists($bigimageloc)){
					unlink($bigimageloc);	
					}

					// delete from small folder
					if(file_exists($smallimageloc)){
					unlink($smallimageloc);	
					}

				$json_response = array(
					"msg_status" => 1,
					"msg_data" => "Successfully deleted"
				);
			}
			else
			{
				$json_response = array(
					"msg_status" => 0,
					"msg_data" => "Failed to delete"
				);
			}


		header('Content-Type: application/json');
		echo json_encode( $json_response );
		exit;

		}
		else
		{
			redirect('login','refresh');
		}
	}


}//end of class