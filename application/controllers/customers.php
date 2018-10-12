<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('customer_model');
    $this->load->library('session');
    $Type="0";
		
	}


	public function index()
	{
    $data['obtener'] = $this->customer_model->all_customer();
    $this->load->view('layouts/headers');
    $this->load->view('customers/Clients',$data);
    $this->load->view('layouts/navbar');
    $this->load->view('customers/viewmodal');
    $this->load->view('layouts/footer');  
	}

	public function create()
	{
       $data=array('fullname'=>$this->input->post('fullname'),'usertype'=>'2',
      'email'=>$this->input->post('email'),'password'=>$this->input->post('password')); 
       $this->customer_model->inserte($data);
	}

	public function edit()
	{
        $data=array('Email'=>$this->input->post('Email'));
		$datos=$this->customer_model->read($data);
		if($datos) {
		  	
		   }
	}

	public function update()
	{
       $data=array('fullname'=>$this->input->post('fullname'),
      'email'=>$this->input->post('email'),'password'=>$this->input->post('password')
       ,$this->input->post('user_id')); 
       $this->customer_model->update_customer($data);
       $this->session->set_flashdata('message','modification made successfully');
       redirect(base_url('/index.php/Customers/index/'));
	}

 public function show()
 {
      $data=array('Email'=>$this->input->post('Email'));

      $datos=$this->customer_model->read($data);
     
      if ($datos) {

         if ($datos->user_type_id=="1"){
               $this->Type="Admin";
            }else{
               $this->Type="Customer";
            }
      echo "<table id='basic-datatable' class='table table-striped nowrap dataTable no-footer' role='grid' aria-describedby='basic-datatable_info'>
       <thead>
      <tr role='row'><th class='sorting_asc' tabindex='0' aria-controls='basic-datatable' rowspan='1' colspan='1' aria-sort='ascending' aria-label='Name: activate to sort column descending' style='width: 86.8125px;'>ID</th>
      <th class='sorting' tabindex='0' aria-controls='basic-datatable' rowspan='1' colspan='1' aria-label='Position: activate to sort column ascending' style='width: 94.8125px;'>Full Name</th>
      <th class='sorting' tabindex='0' aria-controls='basic-datatable' rowspan='1' colspan='1' aria-label='Office: activate to sort column ascending' style='width: 51.8125px;'>User Type</th>
      <th class='sorting' tabindex='0' aria-controls='basic-datatable' rowspan='1' colspan='1' aria-label='Age: activate to sort column ascending' style='width: 27.8125px;'>Email</th>
      <th class='sorting' tabindex='0' aria-controls='basic-datatable' rowspan='1' colspan='1' aria-label='Start date: activate to sort column ascending' style='width: 68.8125px;'>Data</th>
      <th class='sorting' tabindex='0' aria-controls='basic-datatable' rowspan='1' colspan='1' aria-label=': activate to sort column ascending' style='width: 34.8125px;'></th></tr>
    </thead>  " ;  
       echo "
       <tbody> 
<tr role='row' class='odd'>

                 <td class='sorting_1'>$datos->user_id</td>
                     <td>$datos->full_name</td>
                        <td>$this->Type</td>
                        <td>$datos->email</td>
                       <td>63</td>
                                                                     
              </tbody>
              </table> "
              ;

      }else {
       echo  "<div class='alert alert-success alert-dismissible bg-success text-white border-0 fade show' role='alert'>
                   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       <span aria-hidden='true'>×</span>
                    </button>
                     the search does not result
            </div>";
      }
 }

      public function destroy($data)
        {
  
             $this->customer_model->delete($data);
        }



}



                                   
