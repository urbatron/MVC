<?php

class Controller_Proekt extends Controller
{


	function action_index()
	{
		
		$this->view->generate('proekt_view.php', 'template_view.php', $data);
	}
}
