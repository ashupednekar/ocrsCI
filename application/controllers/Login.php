<?php
/**
 * Created by PhpStorm.
 * User: ashu
 * Date: 21/9/18
 * Time: 5:15 AM
 */

class Login extends CI_Controller
{
    public function index(){
        $this->load->view('login');
    }

    public function log_in(){
        $this->load->database();
        $email = $this->input->post('email',true);
        $password = $this->input->post('password',true);

        $r = $this->db->get_where('users',array('email'=>$email))->row();
//        print_r($r);
        $actual_pass = $r->password;
        if($password == $actual_pass){
            if($r->type == 'Officer'){
                $this->load->database();
                $o = $r->officer_id;
                $data['cases'] = $this->db->get_where('case', array('officer'=>$o))->result_array();
                $l = $this->db->where(array('severity'=>'low'))->from("case")->count_all_results();
                $m = $this->db->where(array('severity'=>'medium'))->from("case")->count_all_results();
                $h = $this->db->where(array('severity'=>'high'))->from("case")->count_all_results();
                $data['user'] = $r;
                $data['l'] = $l;
                $data['m'] = $m;
                $data['h'] = $h;
                $this->load->view('officer_log',$data);
            }else if($r->type == 'Complainant'){
                $data['user'] = $r;
                $this->load->view('complainant_log',$data);
            }else if($r->type == 'Forensics'){
                $this->load->database();
                $o = $r->officer_id;
                $data['cases'] = $this->db->get_where('case', array('officer'=>$o))->result_array();
                $l = $this->db->where(array('severity'=>'low'))->from("case")->count_all_results();
                $m = $this->db->where(array('severity'=>'medium'))->from("case")->count_all_results();
                $h = $this->db->where(array('severity'=>'high'))->from("case")->count_all_results();
                $data['user'] = $r;
                $data['l'] = $l;
                $data['m'] = $m;
                $data['h'] = $h;
                $this->load->view('forensics_log',$data);
            }
        }

    }
}