<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Album extends CI_Controller{
	
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('commondatamodel','commondatamodel',TRUE);
       $this->load->model('Album_model','album',TRUE);
       $this->load->helper('directory');
    }

	
	public function index(){
		$session = $this->session->userdata('user_data');
        if($this->session->userdata('user_data'))
        {
            $page = 'dashboard/admin_dashboard/album/album_list';
            $result['albumList']=$this->album->getAlbumList();
            $header = "";
            createbody_method($result,$page,$header,$session);


        }else{
            redirect('login','refresh');
        }
    }
    
    
    public function addAlbum(){
        
        $session = $this->session->userdata('user_data');
        if($this->session->userdata('user_data'))
		{
			if($this->uri->rsegment(3) == NULL)
			{
				$result['mode'] = "ADD";
				$result['btnText'] = "Save";
				$result['btnTextLoader'] = "Saving...";
                $albumID = 0;
                $result['albumID'] = $albumID;
				$result['albumEditdata'] = [];
				
				
				//getAllRecordWhereOrderBy($table,$where,$orderby)
				
				
			
			}
			else
			{
				$result['mode'] = "EDIT";
				$result['btnText'] = "Update";
				$result['btnTextLoader'] = "Updating...";
                $albumID = $this->uri->segment(3);
                $result['albumID'] = $albumID;
                
				$whereAry = [
                    'album_master.album_id' => $albumID
                ];

				// getSingleRowByWhereCls(tablename,where params)
				 $result['albumEditdata'] = $this->commondatamodel->getSingleRowByWhereCls('album_master',$whereAry); 
			//		pre($result['albumEditdata']);exit;
				
			}

                

			$header = "";
			$page = 'dashboard/admin_dashboard/album/album_list_add_edit';
			
			createbody_method($result, $page, $header,$session);
		}
		else
		{
			redirect('login','refresh');
        }
        

    }


	
    public function album_action() {

        $session = $this->session->userdata('user_data');
		if($this->session->userdata('user_data'))
		{
			$json_response = array();
			$formData = $this->input->post('formDatas');
			parse_str($formData, $dataArry);
			

			
		
			$albumID = trim(htmlspecialchars($dataArry['albumID']));
			$mode = trim(htmlspecialchars($dataArry['mode']));
			$albumname = trim(htmlspecialchars($dataArry['albumname']));


			


			if($albumname!='')
			{
				
				
				
				if($albumID>0 && $mode=="EDIT")
				{
					/*  EDIT MODE
					 *	-----------------
					*/

					$upd_where = array('project_master.project_id' =>$projectID);

                    $upd_array = array(
                        'project_name' => $projectname,
                        'project_nickname' => $projectcode,
                        'location_id' => $location,
                     );

                    //    $update = $this->commondatamodel->updateSingleTableData('project_master',$upd_array,$upd_where);
					
					
					if($update)
					{
						$json_response = array(
							"msg_status" => 1,
							"msg_data" => "Updated successfully",
							"mode" => "EDIT"
						);
					}
					else
					{
						$json_response = array(
							"msg_status" => 0,
							"msg_data" => "There is some problem while updating ...Please try again."
						);
					}



				} // end if mode
				else
				{
					/*  ADD MODE
					 *	-----------------
					*/

					            $albumname = trim(htmlspecialchars($dataArry['albumname']));
					            $where_album_mst = array('album_master.name' => $albumname);

								$checkdata= $this->commondatamodel->duplicateValueCheck('album_master',$where_album_mst);
					
					if (!$checkdata) {

									$lastserial=$this->album->getMaxAlbumSerial();
									$lastalbum_id=$this->album->getMaxAlbumId();
									$nextserial=$lastserial+1;
									$nextalbumId=$lastalbum_id+1;

									$albumClass='cat--'.$nextalbumId;

									$dirname=date("d-m-Y")."_".time();
									$img_loc='assets/images/gallery/images/';

			                      //  $dirlocation = $_SERVER['DOCUMENT_ROOT'].'/kecarmel/'.$img_loc.$dirname; // local
			                        $dirlocation = $_SERVER['DOCUMENT_ROOT'].'/'.$img_loc.$dirname; // server

			                          
			                        
			                      /* start directory creation */
                                 if (!file_exists($dirlocation)) {
				                      
				                       mkdir($dirlocation, 0777, true);
				                        #echo "<br>Directory created ";

				                  if (!file_exists($dirlocation.'/big')) {
				                      mkdir($dirlocation.'/big', 0777, true);
				                       #echo "<br>big Directory created ";
				                  }

				                  if (!file_exists($dirlocation.'/small')) {
				                      mkdir($dirlocation.'/small', 0777, true);
				                       #echo "<br>small Directory created ";
				                  }


						          }else{
						            #echo "already exist";
						          } 
                         
						           /* end directory creation */
									

		                    $insert_array = array(
		                                            'name' => $albumname,
		                                            'album_class' => $albumClass,
		                                            'is_active' => 'Y',
		                                            'img_loc' => $img_loc,
		                                            'directory' => $dirname,
		                                            'sl_no' => $nextserial,
		                                            'album_type' => 'IMAGE',
		                                            'school_id' => $session['school_id']
		                                         );
					
							$insertData = $this->commondatamodel->insertSingleTableData('album_master',$insert_array);
							

							if($insertData)
							{
								$json_response = array(
									"msg_status" => 1,
									"msg_data" => "Saved successfully",
									"mode" => "ADD"
								);
							}
							else
							{
								$json_response = array(
									"msg_status" => 1,
									"msg_data" => "There is some problem.Try again"
								);
							}



					}else{

						$json_response = array(
									"msg_status" => 0,
									"msg_data" => "This album already exist!"
								);

					}

				} // end add mode ELSE PART




				

			}
			else
			{
				$json_response = array(
						"msg_status" =>0,
						"msg_data" => "All fields are required"
					);
			}

			header('Content-Type: application/json');
			echo json_encode( $json_response );
			exit;

			

		}
		else
		{
			redirect('adminpanel','refresh');
		}
	} 
	

	public function setAlbumStatus(){
		$session = $this->session->userdata('user_data');
		if($this->session->userdata('user_data'))
		{
			$updID = trim($this->input->post('uid'));
			$setstatus = trim($this->input->post('setstatus'));
			
			$update_array  = array(
				"is_active" => $setstatus
				);
				
			$where = array(
				"album_master.album_id" => $updID
				);
			
			
		
			$update = $this->commondatamodel->updateSingleTableData('album_master',$update_array,$where);
			if($update)
			{
				$json_response = array(
					"msg_status" => 1,
					"msg_data" => "Status updated"
				);
			}
			else
			{
				$json_response = array(
					"msg_status" => 0,
					"msg_data" => "Failed to update"
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



	    public function changeAlbumSerial() {
        $session = $this->session->userdata('user_data');
        if($this->session->userdata('user_data'))
        {

          
           $albumid = $this->input->post("albumid");
           $slno = $this->input->post("slno");
           $action = $this->input->post("action");
         	
         	if ($action=='U') {
         			echo "string";
         			$pre_sl=$slno-1;
         			if ($pre_sl!='0') {
         				$preAlbumData=$this->album->getAlbumDetailsBySl($pre_sl);
         				
         				 $pre_albumid=$preAlbumData->album_id;
         				 $current_array = array('sl_no' =>$pre_sl);
         				
         				 // set current
						 $this->album->setUpdatesAlbumSerial($current_array,$albumid);

						 $previous_array = array('sl_no' =>$slno);
						 // set previous
						 $this->album->setUpdatesAlbumSerial($previous_array,$pre_albumid);
         			}


         	}else{
         			$next_sl=$slno+1;
					$nextAlbumData=$this->album->getAlbumDetailsBySl($next_sl);
					if($nextAlbumData){
						$next_albumid=$nextAlbumData->album_id;

								$current_array = array('sl_no' =>$next_sl);
								// set current
								$this->album->setUpdatesAlbumSerial($current_array,$albumid);

								 $previous_array = array('sl_no' =>$slno);
								// set previous
								$this->album->setUpdatesAlbumSerial($previous_array,$next_albumid);
					}

         	}

            $result['albumList']=$this->album->getAlbumList(); 

             $page = 'dashboard/admin_dashboard/album/album_list_partial_view';
            //$partial_view = $this->load->view($page,$result);
            echo $this->load->view($page, $result, TRUE);
         

        }else{
            redirect('login','refresh');
        }
	}
 
}// end of class
