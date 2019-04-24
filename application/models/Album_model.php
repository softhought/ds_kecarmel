<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Album_model extends CI_Model{
	
	public function getAlbumList()
    {
        
        $data = array();
        $query=$this->db->select('*')
                        ->from('album_master')
                        ->order_by('sl_no')
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


    public function getMaxAlbumSerial()
    {
        
        $data = 0;
        $query=$this->db->select_max('sl_no')
                        ->from('album_master')
                        ->get();
                        
        if($query->num_rows()> 0)
        {
           $row = $query->row();
           return $data = $row->sl_no;
        }else{
            return $data;
         }
    }

    public function getMaxAlbumId()
    {
        
        $data = 0;
        $query=$this->db->select_max('album_id')
                        ->from('album_master')
                        ->get();
                        
        if($query->num_rows()> 0)
        {
           $row = $query->row();
           return $data = $row->album_id;
        }else{
            return $data;
         }
    }

    public function getAlbumDetailsBySl($slno)
    {
        $where = array('album_master.sl_no' =>$slno);
        $data = array();
        $query=$this->db->select('*')
                        ->from('album_master')
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


    public function setUpdatesAlbumSerial($data,$album_id){

        $where = array('album_master.album_id' =>$album_id);
        try {
            $this->db->trans_begin();
            //$this->db->where($where);
            $this->db->update('album_master', $data,$where);
            #echo $this->db->last_query();
            //$affectedRow = $this->db->affected_rows();
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                
                return FALSE;
            } else {
                $this->db->trans_commit();
                
                return TRUE;
            }
        } catch (Exception $exc) {
             return FALSE;
        }
    }
	
	
  
	
}// end of class