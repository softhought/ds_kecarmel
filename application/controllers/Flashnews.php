<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Flashnews extends CI_Controller{
	
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
        {   $header = "";
            $result=[];
            $page = 'dashboard/admin_dashboard/flashnews/flashnews_list';
          
            $result['flashNewsdata'] = $this->commondatamodel->getAllDropdownData('news_flash');
            
            createbody_method($result,$page,$header,$session);


        }else{
            redirect('login','refresh');
        }
    }

    public function addFlashNews(){
        
        $session = $this->session->userdata('user_data');
        if($this->session->userdata('user_data'))
        {
            if($this->uri->rsegment(3) == NULL)
            {
                $result['mode'] = "ADD";
                $result['btnText'] = "Save";
                $result['btnTextLoader'] = "Saving...";
                $flashnewsID = 0;
                $result['flashnewsID'] = $flashnewsID;
                $result['flashnewsEditdata'] = [];
                
                
                //getAllRecordWhereOrderBy($table,$where,$orderby)
                
                
            
            }
            else
            {
                $result['mode'] = "EDIT";
                $result['btnText'] = "Update";
                $result['btnTextLoader'] = "Updating...";
                $flashnewsID = $this->uri->segment(3);
                $result['flashnewsID'] = $flashnewsID;
                
                $whereAry = [
                    'news_flash.news_flash_id' => $flashnewsID
                ];

                // getSingleRowByWhereCls(tablename,where params)
                 $result['flashnewsEditdata'] = $this->commondatamodel->getSingleRowByWhereCls('news_flash',$whereAry); 
            //      pre($result['flashnewsEditdata']);exit;
                
            }

                

            $header = "";
            $page = 'dashboard/admin_dashboard/flashnews/flashnews_list_add_edit';
        
            
            createbody_method($result, $page, $header,$session);
        }
        else
        {
            redirect('login','refresh');
        }
        

    }


        public function flashnews_action() {

        $session = $this->session->userdata('user_data');
        if($this->session->userdata('user_data'))
        {
            $json_response = array();
            $formData = $this->input->post('formDatas');
            parse_str($formData, $dataArry);
            

            
        
            $flashnewsID = trim(htmlspecialchars($dataArry['flashnewsID']));
            $mode = trim(htmlspecialchars($dataArry['mode']));

            $lineone = trim(htmlspecialchars($dataArry['lineone']));
            $linetwo = trim(htmlspecialchars($dataArry['linetwo']));
            $linethree = trim(htmlspecialchars($dataArry['linethree']));
            $linefour = trim(htmlspecialchars($dataArry['linefour']));
            $linefive = trim(htmlspecialchars($dataArry['linefive']));
            $lineno = trim(htmlspecialchars($dataArry['lineno']));
            
            
            


            if($lineone!="")
            {
    
                
                
                if($flashnewsID>0 && $mode=="EDIT")
                {
                    /*  EDIT MODE
                     *  -----------------
                    */

                    $upd_where = array('news_flash.news_flash_id' =>$flashnewsID);

                    $upd_array = array(
                        'line_one' => $lineone,
                        'line_two' => $linetwo,
                        'line_three' => $linethree,
                        'line_four' => $linefour,
                        'line_five' => $linefive,
                        'lineno' => $lineno
                     );

                        $update = $this->commondatamodel->updateSingleTableData('news_flash',$upd_array,$upd_where);
                    
                    
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
                     *  -----------------
                    */

                       $insert_array = array(
                                    'line_one' => $lineone,
                                    'line_two' => $linetwo,
                                    'line_three' => $linethree,
                                    'line_four' => $linefour,
                                    'line_five' => $linefive,
                                    'lineno' => $lineno,
                                    'entry_date' => date('Y-m-d')
                     );
            
            
                    $insertData = $this->commondatamodel->insertSingleTableData('news_flash',$insert_array);
                    

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
    


    public function setFlashNewsStatus(){
        $session = $this->session->userdata('user_data');
        if($this->session->userdata('user_data'))
        {
            $updID = trim($this->input->post('uid'));
            $setstatus = trim($this->input->post('setstatus'));
            
            $update_array  = array(
                "is_active" => $setstatus
                );
                
            $where = array(
                "news_flash.news_flash_id" => $updID
                );
            
            
        
            $update = $this->commondatamodel->updateSingleTableData('news_flash',$update_array,$where);
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



}