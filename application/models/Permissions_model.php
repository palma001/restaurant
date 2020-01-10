<?php  if (! defined('BASEPATH')) exit ('No direct script access allowed');

    class Permissions_model extends CI_Model
    {

      	function  __construct()
      	{
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
        }

        public function store($data,$type_user_id)
        {
            $data = array(
                'user_type_id'   => $type_user_id->id + 1,
                'permission_id'  => $data,
                'user_id'        => $this->session->userdata['user_id'],
                'date'           => date('Y-m-d'),
            );
            $this->db->insert('user_types_permissions', $data);
        }

        public function read()
        {

            $query=$this->db->get('permissions');  
            if ($query->num_rows()>0) {
                return $query;
            }else {

                return false;
            }
        }
    }
?>