<?php 

if (! defined('BASEPATH')) exit ('No direct script access allowed');
class mupload_model extends CI_Model{

	function  __construct()
	{
         parent::__construct();
         $this->load->database();
         $this->load->library('session');
     }


     public function inserte($data)
     {
     
     }

     public function upload($titulo,$imagen)
     {
      $data = array(
            'titulo' => $titulo,
            'ruta' => $imagen
        );
       $this->db->insert('image', $data);

     }

}
