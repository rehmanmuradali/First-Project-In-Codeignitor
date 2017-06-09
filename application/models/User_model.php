<?php
class User_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

        public function getAllUser()
        {
                $this->db->select()->from('users');
                $query = $this->db->get();
                return $query->result_array();
        }

        public function deleteUser($id)
        {
                $this->db->where('ID',$id);
                $this ->db->delete('users');
        }

        public function insertUser($name)
        {
                $data = array(
                  'Name'=> $name
                );
                $this->db->insert('users',$data);
        }

        public function editUser($id,$name)
        {
                $data = array(
                  'ID' => $id,
                  'Name'=> $name
                );
                $this->db->replace('users',$data);
        }



}
?>
