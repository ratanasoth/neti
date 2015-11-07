<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactModel
 *
 * @author Vongkol
 */
class ContactModel extends CI_Model {
    //put your code here
    public function getContact(){
        return $this->db->get('contact')->result();
    }
}
