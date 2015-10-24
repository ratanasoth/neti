<?php

class UserModel extends CI_Model {
    // invoke parent constructor
    public function __construct() {
        parent::__construct();
    }
    /**
     * getUsers is a function to select all users from table users.
     * It shows only users that are not deleted.
     * This function will return a list of users.
     */
    public function getUsers()
    {
        $query = $this->db->get_where('users',array('status'=>1));
        return $query->result();
    }
    /**
     * Delete user by its id
     */
    public function deleteUser($id)
    {
        $this->db->delete('users', array('userid'=>$id));
    }
}
