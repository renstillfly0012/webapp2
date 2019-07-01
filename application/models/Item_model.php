<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model {
    public function getItems($per_page, $end_page){
        $this->db->limit($per_page, $end_page); 
        $query = $this->db->get('tblitem');
        return $query->result();
    }

    public function getAllItems(){
        $query = $this->db->get('tblitem');
        return $query->result();
    }

    public function deleteItem($id){
        $this->db->where('id',$id);
        $this->db->delete('tblitem');
    }
    public function insert($data){
        $this->db->insert('tblitem',$data);
    }

    public function get_item($id){
        $this->db->where('id',$id);
        $q = $this->db->get('tblitem');
        return $q->row();
    }

    public function num_rows(){
        $q = $this->db->get('tblitem');
        return $q->num_rows();
    }

    public function updateImg($id, $image){
        $this->db->set('image', $image);
        $this->db->where('id', $id);
        $this->db->update('tblitem');
    }

    public function update($id,$name,$description,$price){
        $data = array(
        'name' => $name,
        'description' => $description,
        'price' => $price
        );
         $this->db->where('id', $id);
        $this->db->update('tblitem', $data);
    }
    


}