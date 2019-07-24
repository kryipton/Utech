<?php
class Services extends CI_Controller{
    public $parent_folder = "";
    public $sub_folder = "";
    public $includes_for_whole = "";
    public function __construct()
    {
        parent::__construct();
        $this->parent_folder = 'frontend';
        $this->sub_folder = 'services';
        $this->includes_for_whole = 'includes_for_whole_page';

        $this->load->model('Services_model');
        $this->load->model('Portfolio_model');
    }

    public function index()
    {
        $data['services'] = $this->Services_model->GetServices();
        $data['page'] = 'services';
        $this->load->view("$this->parent_folder/$this->sub_folder/whole_page",$data);
    }
    public function Single($id)
    {
        $data['single'] = $this->Services_model->GetService($id);
        $data['portfolio'] = $this->Portfolio_model->get_portfolio_list_e($data['single']['service_port']);
        $data['services'] = $this->Services_model->GetServices();
        $data['page'] = 'single_service';
        $this->load->view("$this->parent_folder/$this->sub_folder/whole_page",$data);
    }




}