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
        $sms="";
        $title = $this->input->post('title');
        $des = $this->input->post('description');
        $query = $this->db->get_where('page',array('title'=>$title));
        if(count($query->result())>0)
        {
            $sms = "The page already exist.";
        }
        else{
            $data = array(
                'title'=>$title,
                'description'=>$des
            );
            $this->db->insert('page',$data);
            
           $page_id = $this->db->insert_id();
           $data1 = array(
                'url' => 'page/view/'.$page_id
            );
            $this->db->where('pageid',$page_id);
            $this->db->update('page', $data1);
            $sms="New page has been created.";
        }
        return $sms;
    }
}
