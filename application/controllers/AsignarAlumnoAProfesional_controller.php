
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AsignarAlumnoAProfesional_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('getMenu'));
	}

	public function index()
	{
		//$data['menu']=main_menu();
		$this->load->view('asignarAlumnoAProfesional_view');
	}



}
