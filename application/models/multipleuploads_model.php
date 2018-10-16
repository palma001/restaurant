<?php 

if (! defined('BASEPATH')) exit ('No direct script access allowed');
class multipleuploads_model extends CI_Model{

	function  __construct()
	{
         parent::__construct();
         $this->load->database();
         $this->load->library('session');
     }

     public function upload($titulo,$imagen)
     {
      $data = array(
            'slider' => $titulo,
            'image' => $imagen
        );
       $this->db->insert('sliders', $data);
    
     }

     public function get(){
         $query=$this->db->get('sliders');  
         if ($query->num_rows()>0) {
             return $query;
         }else {

              return false;
         }
     }

      public function delete($data)
      {
          $this->db->where('slider_id',$data);
          $this->db->delete('sliders');
          $this->session->set_flashdata('message','delete data');
          redirect(base_url('/index.php/sliders/sliders/index/')); 
      }

}
