<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class gallerymodel extends CI_Model{
		/* get all events List*/

	public function getAllImageList(){
		$data = [];
		$where = array('album_master.is_active' =>'Y');
		$query = $this->db->select("*")
				->from('album_master')
				->order_by('album_master.sl_no')
				->where($where)
				->get();
				 #q();
			
			if($query->num_rows()> 0)
			{
                foreach($query->result() as $rows)
				{
					//$data[] = $rows;

					$data[] = array(
						"albumData" => $rows,
						"imageData" => $this->getAllImageByAlbum($rows->album_id) 
					 );
				}
	             
                        }
			
	        return $data;
	       
	}


	public function getAllImageByAlbum($album_id){
		$data = [];
		$where = array(	
					'gallery_images_all.album_master_id' =>$album_id, 
					'gallery_images_all.is_active' =>'Y'
				);
		$query = $this->db->select("*")
				->from('gallery_images_all')
				->join('album_master','album_master.album_id = gallery_images_all.album_master_id','INNER')
				->where($where)
				->order_by('gallery_images_all.album_master_id')
				->get();
				 #q();
			
			if($query->num_rows()> 0)
			{
                foreach($query->result() as $rows)
				{
					$data[] = $rows;

					
				}
	             
                        }
			
	        return $data;
	       
	}


	





 
   public function getImageDetailsForDeleteFile($imageid)
    {
        $where = array('gallery_images_all.id' =>$imageid);
        $data = array();
        $query=$this->db->select('*')
                        ->from('gallery_images_all')
                        ->join('album_master','album_master.album_id = gallery_images_all.album_master_id','INNER')
                        ->where($where)
                        ->get();

        if($query->num_rows()> 0)
        {
                $row = $query->row();
                $data = $row;
          
            return $data;
        }else{
            return $data;
         }
    } 




}// end of class