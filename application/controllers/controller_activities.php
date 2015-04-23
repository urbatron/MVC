<?php

class Controller_Activities extends Controller
{

	function action_index()
	{
		$this->view->generate('activities_view.php', 'template_view.php');
	}
}
