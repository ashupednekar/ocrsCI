<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function sign_up(){
        $name = $this->input->post('name',true);
        $email = $this->input->post('email',true);
        $password = $this->input->post('password',true);
        $type = $this->input->post('type',true);
        $address = $this->input->post('address',true);
        $phone = $this->input->post('phone',true);

        $this->load->database();

        $temp = array(
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'address' => $address,
            'type' => $type,
            'phone' => $phone
        );

        $this->db->insert('users',$temp);
        $i = $this->db->insert_id();
//        echo $i;
        $r = $this->db->get_where('users', array('id'=>$i))->row();
        $data['name'] = $r->Name;
//        print_r($data);
        $this->load->view('sign_up-success',$data);
    }
}
