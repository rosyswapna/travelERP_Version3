<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tour extends CI_Controller {
	public function __construct()
	{
    		parent::__construct();
		$this->load->helper('my_helper');
		$this->load->model('tour_model');
		no_cache();
	}

	public function index(){
		$param1=$this->uri->segment(3);
		$param2=$this->uri->segment(4);
		$param3=$this->uri->segment(5);
		$param4=$this->uri->segment(6);
		if($this->session_check()==true) {
			if($param1==''){
				$data['title']="Home | ".PRODUCT_NAME;    
	       			$page='user-pages/user_home';
				$this->load_templates($page,$data);
			}elseif($param1=='business-season'){	
				$this->business_season($param2);
			}elseif($param1=='destination'){	
				$this->destination($param2);
			}else{
				$this->notFound();
			}

		}else{
			$this->notAuthorized();
		}
	}

	//-----------------------business season crud----------------------------------
	public function business_season($id='')
	{
		if($this->session_check()==true) {

			$data['id']= '';
			$data['name']= '';
			$data['starting']= '';
			$data['ending']= '';

			//if edit get values to form inputs
			if(is_numeric($id) && $id > 0){
				$season = $this->tour_model->getBusinessSeason($id);
				if($season){
					//get default values for form input values
					$data['id']= $sesson['id'];
					$data['name']= $sesson['name'];
					$data['starting']= $sesson['starting'];
					$data['ending']= $sesson['ending'];
				}
			}
			
			if(isset($_REQUEST['business-season-add'])){//add season click
				$dbData['name'] = $_REQUEST['name'];
				$dbData['starting'] = $_REQUEST['starting'];
				$dbData['ending'] = $_REQUEST['ending'];

				$this->tour_model->addBusinessSeason($dbData);	
				
			}else if(isset($_REQUEST['business-season-edit'])){//edit season click 
				$dbData['id'] = $_REQUEST['id'];
				$dbData['name'] = $_REQUEST['name'];
				$dbData['starting'] = $_REQUEST['starting'];
				$dbData['ending'] = $_REQUEST['ending'];
				
				$this->tour_model->updateBusinessSeason($dbData);
				
			}
			
			$data['season_list'] = $this->tour_model->getBusinessSeasonList($data);

			$this->tour_model->addBusinessSeason($data);

			$data['title']="Business Season | ".PRODUCT_NAME;  
			$page='user-pages/business-season';
			$this->load_templates($page,$data);
		}
		else{
			$this->notAuthorized();
		}	
	}
	//------------------------------------------------------------------------------------------
	
	//-----------------------destinations----------------------------------------------------
	public function destination($id=''){
		if($this->session_check()==true) {
			
			$data['title']="Destination | ".PRODUCT_NAME;  
			$page='user-pages/destination';
			$this->load_templates($page,$data);
		}
		else{
			$this->notAuthorized();
		}
	}
	//------------------------------------------------------------------------------------------

	//----------------------common functions-----------------------------------------
	public function session_check() {
		if(($this->session->userdata('isLoggedIn')==true ) && ($this->session->userdata('type')==FRONT_DESK)) {
			return true;
		} else {
			return false;
		}
	} 

	public function notAuthorized(){
		$data['title']='Not Authorized | '.PRODUCT_NAME;
		$page='not_authorized';
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin-templates/nav');
		$this->load->view($page,$data);
		$this->load->view('admin-templates/footer');
	
	}
	public function notFound(){
		if($this->session_check()==true) {
		 	$this->output->set_status_header('404'); 
		 	$data['title']="Not Found";
      	 		$page='not_found';
        		 $this->load_templates($page,$data);
		}else{
			$this->notAuthorized();
		}
	}

	public function load_templates($page='',$data=''){
		if($this->session_check()==true) {
			$this->load->view('admin-templates/header',$data);
			$this->load->view('admin-templates/nav');
			$this->load->view($page,$data);
			$this->load->view('admin-templates/footer');
		}
		else{
			$this->notAuthorized();
		}
	}
}
