<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function login($data){
        $this->db->where($data);
        $q = $this->db->get('tbluser');
        $user = $q->row();
        //print_r($user); die();
        if($q->num_rows() > 0){
            $this->session->set_userdata('login',true);
            $this->session->set_userdata('usr_id',$user->id);
            $this->session->set_userdata('img',$user->Image);
            $this->session->set_userdata('full_name',$user->full_name);
            $this->session->set_userdata('email',$user->email);
            $this->session->set_userdata('verification_code_sha1',$user->verification_code_sha1);
            $this->session->set_userdata('int_is_verified',$user->int_is_verified);
            $this->session->set_userdata('usr_type',$user->usr_type);
        } else {
            session_destroy();
        }
    }
     public function insert($data){
        $this->db->insert('tbluser',$data);
    }
    
    public function getAllItems(){
        $query = $this->db->get('tbluser');
        return $query->result();
    }
    
    public function getUser($data)
    {
        $this->db->where('verification_code_sha1',$data);
        $q = $this->db->get('tbluser');
        return $q->row();
    }

    public function countUsers(){
        $query = $this->db->query("SELECT *,count(id) AS num_of_time FROM tbluser");
            // print_r($query->result());
            return $query->result();
    }

    public function verifyUser($id){
        $this->db->set('int_is_verified', 1);
        $this->db->where('id', $id);
        $this->db->update('tbluser');
    }
}
