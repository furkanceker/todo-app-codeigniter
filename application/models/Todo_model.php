<?php 
class Todo_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }
    public $tablename = "todos";
    public function get_all(){
        return $this->db->get($this->tablename)->result();
    }
    public function insert($data = array()){
        return $this->db->insert($this->tablename, $data);
    }
    public function delete($id){
        return $this->db->where("id", $id)->delete($this->tablename);
    }
    public function update($id, $data = array()){
        return $this->db->where("id", $id)->update($this->tablename, $data);
    }

}
?>