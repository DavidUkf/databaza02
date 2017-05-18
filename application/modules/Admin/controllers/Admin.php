<?php
class Admin extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->module([
			'Studenti'
        	]);
      
        
    }
    function index()
    {
        $this->template->call_admin_template();
    }

    function studenti()
    {
    		$this->studenti->display_studenti();
    }
    function addStudent()
    {
        $this->studenti->addStudent();
    }
}