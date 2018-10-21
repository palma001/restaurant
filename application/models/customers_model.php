<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');
    
    class customers_model extends CI_Model{
        function  __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
        }


        public function store($data)
        {
            $fecha = date('Y/m/d');
            $this->db->insert('users',array(
                'user_type_id' => $data['user_type_id'] ,
                'full_name'    => $data['full_name'], 
                'email'        => $data['email'], 
                'password'     => $data['password'],
                'date'         => $fecha
                )
            );
        }
        
        public function update($id,$data)
        {
            if ($data['password']) {

                $datos = array(
                    'full_name' => $data['full_name'],
                    'email' =>  $data['email'],
                    'user_type_id' =>  $data['user_type_id'],
                    'password' =>  $data['password'],
                );
            }else{

                $datos = array(
                    'full_name' => $data['full_name'],
                    'email' =>  $data['email'],
                    'user_type_id' =>  $data['user_type_id'],
                );
            }

            $this->db->where('user_id',$id);
            $query = $this->db->update('users',$datos);
        }

        public function read()
        {
            $this->db->join('users','users.user_type_id = user_types.user_type_id');
            $this->db->where('users.user_type_id = 2');
            $query= $this->db->get('user_types');
            if ($query->num_rows() > 0){
                return $query;
            }else{
                return false;
            }
        }

        public function get($id)
        {
            $this->db->join('users','users.user_type_id = user_types.user_type_id');
            $this->db->where('user_id',$id);
            $query= $this->db->get('user_types');

            if ($query->num_rows() > 0){
                return $query->row();
            }else{
                return false;
            }
        }

        
        public function destroy($id)
        {
            $this->db->delete('users',array('user_id' => $id)); 
        }
    }

?>


