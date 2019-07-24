<?php class Panel_admin_page_services extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->parent_folder = 'backend';
        $this->sub_folder = 'services';

        $this->load->model('Services_model');

        if (!$this->session->userdata("session")){
            redirect(base_url("utech_admin_panel_login_page"));
        }
    }

    public function index()
    {
        $data['services'] = $this->Services_model->GetServices();
        $this->load->view("$this->parent_folder/$this->sub_folder/services_list",$data);
    }

    public function AddService()
    {
        $this->load->model('Portfolio_model');
        $data['categories'] = $this->Portfolio_model->get_portfolio_category();
        $this->load->view("$this->parent_folder/$this->sub_folder/services_add",$data);
    }

    public function AddServiceACT()
    {
        $service_name = strip_tags($this->input->post('service_name'));
        $service_title = strip_tags($this->input->post('service_title'));
        $service_desc = strip_tags($this->input->post('service_desc'));
        $service_port = strip_tags($this->input->post('service_port'));
        $service_advantages = strip_tags($this->input->post('service_advantages'));

        $config['upload_path'] = 'uploads/services';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['image']['name'];

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('service_img')) {

            $uploadData = $this->upload->data();
            $image = $uploadData['file_name'];
            if (!empty($service_name) and !empty($service_desc) and !empty($service_title)){
                $data = array(
                    'service_name' => $service_name,
                    'service_title' => $service_title,
                    'service_desc' => $service_desc,
                    'service_advantages' => $service_advantages,
                    'service_img' => $image,
                    'service_port' => $service_port,

                );
                $this->Services_model->AddService($data);
                $this->session->set_flashdata('success','Servis uurla elave olundu');
                redirect(base_url('utech_admin_panel_services'));
            }else{
                $this->session->set_flashdata('error','Ad, Bashliq ve Haqqinda hissesi doldurulmalidir!');
                redirect(base_url('utech_admin_panel_services_elave_et'));
            }
        }else{
            $this->session->set_flashdata('error','Shekil daxil edin!');
            redirect(base_url('utech_admin_panel_services_elave_et'));
        }

    }

    public function DeleteService($id)
    {
        $this->Services_model->DeleteService($id);
        $this->session->set_flashdata('success','Servis silindi');
        redirect(base_url('utech_admin_panel_services'));
    }

    public function UpdateService($id)
    {
        $this->load->model('Portfolio_model');
        $data['categories'] = $this->Portfolio_model->get_portfolio_category();
       $data['service'] = $this->Services_model->GetService($id);
       $this->load->view("$this->parent_folder/$this->sub_folder/services_update",$data);
    }

    public function UpdateServiceACT($id)
    {
        $service_name = strip_tags($this->input->post('service_name'));
        $service_title = strip_tags($this->input->post('service_title'));
        $service_desc = strip_tags($this->input->post('service_desc'));
        $service_port = strip_tags($this->input->post('service_port'));
        $service_advantages = strip_tags($this->input->post('service_advantages'));

        $config['upload_path'] = 'uploads/services';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['image']['name'];

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('service_img')) {

            $uploadData = $this->upload->data();
            $image = $uploadData['file_name'];
            if (!empty($service_name) and !empty($service_desc) and !empty($service_title)){
                $data = array(
                    'service_name' => $service_name,
                    'service_title' => $service_title,
                    'service_desc' => $service_desc,
                    'service_advantages' => $service_advantages,
                    'service_img' => $image,
                    'service_port' => $service_port,
                );
                $this->Services_model->UpdateService($data,$id);
                $this->session->set_flashdata('success','Servis ugurla yenilendi');
                redirect(base_url('utech_admin_panel_services'));
            }else{
                $this->session->set_flashdata('error','Ad, Bashliq ve Haqqinda hissesi doldurulmalidir!');
                redirect(base_url('utech_admin_panel_services_yenile'.$id));
            }
        }else{
            if (!empty($service_name) and !empty($service_desc) and !empty($service_title)) {
                $data = array(
                    'service_name' => $service_name,
                    'service_title' => $service_title,
                    'service_desc' => $service_desc,
                    'service_advantages' => $service_advantages,
                    'service_port' => $service_port,
                );
                $this->Services_model->UpdateService($data,$id);
                $this->session->set_flashdata('success', 'Servis ugurla yenilendi');
                redirect(base_url('utech_admin_panel_services'));
            }else{
                    $this->session->set_flashdata('error','Ad, Bashliq ve Haqqinda hissesi doldurulmalidir!');
                    redirect(base_url('utech_admin_panel_services_yenile/'.$id));
                }
        }

    }
}
