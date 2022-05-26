<?php

class Main_model extends CI_Model{

    public function __construct()
    {
        parent:: __construct();
    }

    public $tableName = "kullanici";

    public function get_all(){
        $this->db->where('durum', "aktif");
        $this->db->where('yetki_id', "2");
        return $this->db->get($this->tableName)->result();
    }

    public function insert($data = array()){
        return $this->db->insert($this->tableName, $data);
    }

    public function updategetir($id){
        $this->db->where('id', $id);
        return $this->db->get($this->tableName)->result();
    }

    public function update($id,$degerler=array()){
        $this->db->where('id',$id);
        $this->db->update($this->tableName,$degerler);
        if ($degerler){
            redirect(base_url("main/listele/"));
        }
    }

    public function myupdate1($id,$degerler=array()){
        $this->db->where('id',$id);
        $this->db->update($this->tableName,$degerler);
        if ($degerler){
            redirect(base_url("logout"));
        }
    }

    public function delete($id,$data){
        return $this->db->where('id',$id)->update($this->tableName, $data);
    }
}