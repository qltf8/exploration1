<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
		public function __construct(){
		parent::__construct();
		$this->load->library(array('pagination','table'));
		$this->load->helper('url');
	
		}	
	public function index()
	{
		$this->load->model('Getdata_model','getdata');
		
		$template = array(
			'table_open' => '<table class="table table-striped" width=1000px>'
			);

		$this->table->set_template($template);
		
		$config['base_url'] = site_url('welcome/index');
		$config['total_rows'] = $this->getdata->allRows();
		$config['per_page'] = 5;
		
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		
		$config['first_link'] = '<<';
		$config['first_tag_open'] = '<li class="page-first">';
		$config['first_tag_close'] = '</li>';
		
		$config['last_link'] = '>>';
		$config['last_tag_open'] = '<li class="page-last">';
		$config['last_tag_close'] = '</li>';
		
		$config['next_link'] = '>';
		$config['next_tag_open'] = '<li class="page-next">';
		$config['next_tag_close'] = '</li>';
		
		$config['prev_link'] = '<';
		$config['prev_tag_open'] = '<li class="page-pre">';
		$config['prev_tag_close'] = '</li>';
		
		$config['num_tag_open'] = '<li class="page-number">';
		$config['num_tag_close'] = '</li>';
		
		$config['cur_tag_open'] = '<li class="page-number active disabled"><a>';
		$config['cur_tag_close'] = '</a></li>';
		
		$offset=intval($this->uri->segment(3));
		$res=$this->getdata->getData($offset,$config['per_page']);
		
		$this->pagination->initialize($config);
		$data['links']=$this->pagination->create_links();
		
		$data['table']=$this->table->generate($res);
		$this->load->view('show',$data);
	}
}
