<?php

class Controller_Certificates extends Controller
{


	function action_index()
	{
		
		$this->view->generate('certificates_view.php', 'template_view.php', $data);
	}
}
