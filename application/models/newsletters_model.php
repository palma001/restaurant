<?php  if (! defined('BASEPATH')) exit ('No direct script access allowed');

    class Newsletters_model extends CI_Model{

      	function  __construct()
      	{
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
        }

        public function store($data)
        {
            $fecha = date('Y/m/d');
            $data = array(
                'email' => $data['email'],
                'date'  => $fecha,
            );
            $this->db->insert('newsletters', $data);
        }

        public function read()
        {

            $query = $this->db->get('newsletters');  
            if ($query->num_rows()>0) {
                return $query;
            }else {

                return false;
            }
        }

        public function destroy($id)
        {
            $this->db->where('gallery_id',$id);
            $this->db->delete('newsletters');
        }
    }

?>