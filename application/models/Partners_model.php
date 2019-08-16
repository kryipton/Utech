<?php
class Partners_model extends CI_Model {
    public function AddPartner($data)
    {
        $this->db->insert("collaboration", $data);
    }

    public function GetPartners()
    {
        return $this->db->order_by("id", "DESC")->get("collaboration")->result_array();

    }

    public function Partners_delete($id)
    {
        $this->db->where('id',$id)->delete('collaboration');
    }
    public function Partners_update($id)
    {
        return $this->db->where('id',$id)->get("collaboration")->row_array();

    }

    public function UpdatePartner($data,$id)
    {
        $this->db->where('id',$id)->update("collaboration", $data);
    }


}