<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Flashnews_model extends CI_Model{
	
	public function getAlbumList()
    {
        
        $data = array();
        $query=$this->db->select('*')
                        ->from('news_flash')
                        ->get();
        if($query->num_rows()> 0)
        {
            foreach ($query->result() as $rows)
            {
                $data[] = $rows;
            }
            return $data;
        }else{
            return $data;
         }
    }

}