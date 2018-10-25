<?php  if (! defined('BASEPATH')) exit ('No direct script access allowed');

    class Galleries_model extends CI_Model{

      	function  __construct()
      	{
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
        }

        public function store($imagen)
        {
            $data = array(
                'gallery'   => $imagen,
            );
            $this->db->insert('gallaries', $data);
        }

        public function read()
        {

            $query = $this->db->get('gallaries');  
            if ($query->num_rows()>0) {
                return $query;
            }else {

                return false;
            }
        }

        public function destroy($id)
        {
            $this->db->where('gallery_id',$id);
            $this->db->delete('gallaries');
            $this->session->set_flashdata('message','Deleted Successfully');
            redirect(base_url('gallaries/')); 
        }
    }

?>