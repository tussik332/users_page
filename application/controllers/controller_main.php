<?php

class Controller_Main extends Controller {

	/**
	 * Controller_Main constructor.
	 */
	function __construct()
	{
		$this->model = new Model_Main();
		$this->view = new View();
	}

	function action_index()
	{
		$data = $this->model->get_info_users();

		$this->view->generate('main_view.php', 'template_view.php', $data);
	}
}