<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CareerModel
 *
 * @author Vongkol
 */
class CareerModel extends CI_Model{
    
     public function __construct() {
        parent::__construct();
    }
    private $t_career = "career";

    /*
     * This function is for getting data from table career to show at view
     * Author: Theary RIN
     */
    public function get_career($id=null){
        
        $this->db->select("*");
        
        if($id !=NULL){
            $this->db->where("{$this->t_career}.careerid",$id);
        }
        return $this->db->get($this->t_career);
    }
    /*
     * This function is for doing edit career
     * Author: Theary RIN
     */
    public function do_edit_career($title,$des,$career_id){
        
        if ($career_id != null) {
            $this->db->where("{$this->t_career}.careerid", $career_id);
        }

        $data_edit = array(
            "title" => $title,
            "description" => $des
        );

        $this->db->update($this->t_career, $data_edit);
        return $this;
    }
    
}
