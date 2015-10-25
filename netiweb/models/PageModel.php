<?php


/**
 * Description of PageModel
 *
 * @author Vongkol
 */
class PageModel extends CI_Model{
    /**
     * Method get all pages from page table.
     */
    public function getPages()
    {
        $query = $this->db->get('page');
        return $query->result();
    }
    /**
     * Function to save new page to table.
     */
    public function addPage()
    {
        $title = $this->input->post('title');
        $des = $this->input->post('description');
    }
}
