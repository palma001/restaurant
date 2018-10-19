<?php 

if (! defined('BASEPATH')) exit ('No direct script access allowed');
class customers_model extends CI_Model{

  function  __construct()
  {
         parent::__construct();
         $this->load->database();
         $this->load->library('session');
         $var="0";
     }


    public function inserte($data)
    {
      $fecha_actual = date('d-m-Y'); 
      $this->email_validatio();
      if ($this->var=="1") {
          $this->session->set_flashdata('message','the email belongs to a user');
          redirect(base_url('/index.php/Welcome/create/'));          
      }else {
        $this->db->insert('users',array('full_name'=>$data['fullname'],'email'=>$data['email'],
          'password'=>$data['password'],'user_type_id'=>$data['usertype'],'date'=>$fecha_actual));
        $this->session->set_flashdata('message','Registration Done With Exist');
        redirect(base_url('/index.php/customers/Customers/index/')); 
      }
    }

     public  function read($data)
     {   
        $this->db->where('user_id',$data);
         $query=$this->db->get('users');
        if ($query->num_rows()>0)
        {
          $this->var="1";
          return $query->row();
        }else{
          $this->var="0";
          return false;
        }
     }

    public function  email_validatio()
    {
        $data=$this->input->post('email');
        $this->db->where('email',$data);
        $query=$this->db->get('users');
        if ($query->num_rows()>0)
        {
          $this->var="1";
          return $query->row();
        }else{
             $this->var="0";
            return false;
        }
    }

    public  function all_customer()
    {
        $this->db->where('user_type_id','2');
        $query=$this->db->get('users');
         if ($query->num_rows()>0) {
               return $query;
         }else {
                return false;
         }
    }

      public function update_customer($data)
      {
        $id=$this->input->post('user_id');
        $this->db->where('user_id',$id);
        $query=$this->db->update('users',array('full_name'=>$data['fullname'],'email'=>$data['email'],
          'password'=>$data['password']));
          echo  "<div class='alert alert-success alert-dismissible bg-success text-white border-0 fade show' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                           <span aria-hidden='true'>×</span>
                      </button>
                    modification Made successfully
          </div>";
      }

      public function count_customer()
      {
          $this->db->where('user_type_id','2');
          $query= $this->db->get('users'); 
          $numero_filas_customer=$query->num_rows(); 
          return $numero_filas_customer;
      }
      public function delete($data)
      {
          $this->db->where('user_id',$data);
          $this->db->delete('users');
          $this->session->set_flashdata('message','delete data');
          redirect(base_url('/index.php/customers/Customers/index/')); 
      }
  

}


