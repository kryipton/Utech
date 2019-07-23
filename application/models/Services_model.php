<?php class Services_model extends CI_Model{
    public function AddService($data)
    {
        $this->db->insert('services',$data);
    }

    public function GetServices()
    {
        return $this->db->order_by('id','DESC')->get('services')->result_array();
    }

    public function DeleteService($id)
    {
        $this->db->where('id',$id)->delete('services');
    }
    public function GetService($id)
    {
        return $this->db->where('id',$id)->get('services')->row_array();
    }

    public function UpdateService($data,$id)
    {
        $this->db->where('id',$id)->update('services',$data);
    }
}
