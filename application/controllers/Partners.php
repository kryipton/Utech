<?php
class Partners extends CI_Controller{

    public $parent_folder = "";
    public $sub_folder = "";
    public $includes_for_whole = "";

    public function __construct()
    {
        parent::__construct();
        $this->parent_folder = "frontend";
        $this->sub_folder = "partners";
        $this->includes_for_whole = "includes_for_whole_page";
        $this->load->model("Partners_model");
    }

    public function index(){
        $data["partners"] = $this->Partners_model->GetPartners();
        $this->load->view("$this->parent_folder/$this->sub_folder/whole_page", $data);
    }


}