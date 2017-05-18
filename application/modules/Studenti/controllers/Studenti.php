<?php


class Studenti extends MY_controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function display_studenti()
	{
		$data['page_header'] = "All Studenti";
		$data['description'] = "displays all studenti";
		$data['content_view'] = 'Studenti/studenti_display_v';
		$this->template->call_admin_template($data);
	}
	function addStudent()
	{
		$data['page_header'] = "add studenta";
		$data['description'] = "add studenta do databazy";
		$data['content_view'] = 'Studenti/add_student_v';
		$this->template->call_admin_template($data);

	}
}