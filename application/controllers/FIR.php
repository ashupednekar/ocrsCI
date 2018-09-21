<?php
/**
 * Created by PhpStorm.
 * User: ashu
 * Date: 21/9/18
 * Time: 1:31 PM
 */

class FIR extends CI_Controller
{
    public function index(){
        $this->load->view('fir');
    }

    public function submit_fir(){
        $name = $this->input->post('name',true);
        $father_name = $this->input->post('father_name',true);
        $add = $this->input->post('add',true);
        $occupation = $this->input->post('occupation',true);
        $email = $this->input->post('email',true);
        $contact = $this->input->post('contact',true);
        $nation = $this->input->post('nation',true);
        $aadhar = $this->input->post('aadhar',true);
        $pass = $this->input->post('pass',true);
        $dl = $this->input->post('dl',true);
        $c_type = $this->input->post('c_type',true);
        $location = $this->input->post('location',true);
        $ps = $this->input->post('ps',true);
        $severity = $this->input->post('severity    ',true);


        $this->load->database();

        $temp = array(
            'name' => $name,
            'guardian' => $father_name,
            'address' => $add,
            'occupation' => $occupation,
            'email' => $email,
            'phone' => $contact,
            'nation' => $nation,
            'aadhar' => $aadhar,
            'passport' => $pass,
            'dl' => $dl,
            'location' => $location,
            'crime_type' => $c_type,
            'severity' => $severity,
            'p_station' => $ps
        );

        $this->db->insert('case',$temp);
        $i = $this->db->insert_id();
//        echo $i;
        $c = $this->db->get_where('case', array('id'=>$i))->row();
        $data['case'] = $c;
//        print_r($data);
        $this->load->view('fir_success',$data);
    }
}