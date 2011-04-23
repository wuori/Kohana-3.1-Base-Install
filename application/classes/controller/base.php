<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

	public $template = 'template';
	public $data;

	/**
	 *	Init site params and template
	 */
	public function before()
	{
		parent::before();
		
		# use template
		if ($this->auto_render)
		{
			# configure template
			$this->template->title   = '';
			$this->template->keywords   = '';
			$this->template->description   = '';
  			$this->template->styles = array();
  			$this->template->scripts = array();   
			$this->template->content = '';
		}
		
	}
	
}