 <?php
 class Portfolio_model extends CI_Model {

     public function __construct()
     {
         parent::__construct();
     }


     public function get_portfolio_category(){
         return $this->db->order_by("id", "DESC")->get("portfolio_category")->result_array();
     }

     public function get_portfolio_category_single($where){
         return $this->db->where($where)->get("portfolio_category")->row_array();
     }

     public function portfolio_category_add($data){
         $this->db->insert("portfolio_category", $data);
    }

     public function portfolio_category_update($where, $data){
         $this->db->where($where)->update("portfolio_category", $data);
     }

     public function portfolio_category_delete($where){
         $this->db->where($where)->delete("portfolio_category");
     }

 }
