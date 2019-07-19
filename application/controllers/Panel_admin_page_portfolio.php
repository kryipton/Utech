 <?php
     class Panel_admin_page_portfolio extends CI_Controller{

         public $parent_folder = "";
         public $sub_folder = "";
         public $includes_for_whole = "";

         public function __construct()
         {
             parent::__construct();
             $this->parent_folder = "backend";
             $this->sub_folder = "portfolio";
             $this->includes_for_whole = "includes_for_whole";


             $this->load->model("Portfolio_model");
         }

         public function index()
         {
             $this->load->view("$this->parent_folder/$this->sub_folder/whole_page");
         }


//         =======================Portfolio_category hissesi=================================

         public function portfolio_category_list(){
             $data["portfolio_categories"] = $this->Portfolio_model->get_portfolio_category();

             $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_category/whole_page", $data);
         }

         public function portfolio_category_list_add(){
             $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_category/portfolio_category_operations/portfolio_category_add");
         }

         public function portfolio_category_list_add_act(){
             $category_name = strip_tags($this->input->post("category_name"));

             $this->Portfolio_model->portfolio_category_add(array(
                 "name" => $category_name,
             ));

             redirect(base_url("utech_admin_panel_portfolio_category"));

         }

         public function portfolio_category_list_update($id){
            $data["portfolio_category"] = $this->Portfolio_model->get_portfolio_category_single(array(
                    "id" => $id,
                ));

             $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_category/portfolio_category_operations/portfolio_category_update", $data);

         }

         public function portfolio_category_list_update_act($id){
             $category_name = strip_tags($this->input->post("category_name"));

             $this->Portfolio_model->portfolio_category_update(

                array(
                    "id" =>$id,
                ),

                 array(
                 "name" => $category_name,
                )
             );

             redirect(base_url("utech_admin_panel_portfolio_category"));

         }

         public function portfolio_category_list_delete($id){
             $this->Portfolio_model->portfolio_category_delete(array(
                 "id" => $id,
             ));

             $data["portfolio_categories"] = $this->Portfolio_model->get_portfolio_category();
             $this->session->set_flashdata("alert", "Məlumat Silindi!");
             $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_category/portfolio_category_delete_render_page/portfolio_category_table", $data);
         }


//         =======================Portfolio_category hissesi=================================


         public function portfolio_list(){
             $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_list/whole_page");
         }





 }
