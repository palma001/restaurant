<?php  if (! defined('BASEPATH')) exit ('No direct script access allowed');

    class Sliders_model extends CI_Model{

      	function  __construct()
      	{
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
        }

        public function store($imagen)
        {
            $data = array(
                'image'   => $imagen,
                'user_id' => $this->session->userdata['user_id']
            );
            $this->db->insert('sliders', $data);
        }

        public function read()
        {

            $query=$this->db->get('sliders');  
            if ($query->num_rows()>0) {
                return $query;
            }else {

                return false;
            }
        }

        public function destroy($id)
        {
            $this->db->where('slider_id',$id);
            $this->db->delete('sliders');
            $this->session->set_flashdata('message','Deleted Successfully');
            redirect(base_url('/index.php/sliders/')); 
        }
    }

?>