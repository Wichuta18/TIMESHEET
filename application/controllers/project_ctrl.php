<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_ctrl extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Project_model');
    }
    
    public function project()
	{
		$this->load->view('head');
		$this->load->view('body');
        $this->load->view('footer');
        $data['members'] = $this->Project_model->getTeam();        
        $this->load->library("pagination");
        $config['base_url'] = base_url('Project_ctrl/project');  
        $config['uri_segement'] = 3;
        $config['per_page'] = 5;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li class="page-item disabled">&nbsp;&nbsp;';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = '&nbsp;&gt;';       
        // $config['prev_link'] = '&nbsp;&gt;';    
        $config['num_link'] = 1;
        $config['first_link'] = false;
        $config['last_link'] = false;
        $page = $this->uri->segment(3,0);
        // $getTeam = $this->Test_model->getTeam();
        $data["select_data"] = $this->Project_model->select_data($config['per_page'], $page);
        $config['total_rows'] = $this->Project_model->getTotalrows();
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        // $this->load->view('Test_view',['getTeam' => $getTeam]);
        $this->load->view('project_view', $data); //$getTeam
    }
    public function insert_project()
    {
        // echo 'hello world';
            $this->load->model("Project_model");
            $projectCode = $this->input->post("projectCode");
            $projectName = $this->input->post("projectName");
            //num rows duplicate
            $this->db->select('projectCode', 'projectName');
            $this->db->where('projectCode', $projectCode, 'projectName', $projectName);
            $query = $this->db->get('projects');
            $num = $query->num_rows();
            if ($num > 0){
                echo "<script>";
                echo "alert('Data Duplicate!');";
                echo " window.location.replace('http://localhost/TIMESHEET/Welcome/inserted');";
                echo "</script>";
            } else {
                $data = array(
                    "projectCode" => $this->input->post("projectCode"),
                    "projectName" => $this->input->post("projectName"),
                    "budget" => $this->input->post("budget"),
                    "startDate" => $this->input->post("startD"),
                    "endDate" => $this->input->post("endD")
                );
            
            $this->project_model->insert($data);
            redirect(base_url() . "inserted");
            }
    } 
    public function inserted()
    {
        $this->project();
        
        
    }
}