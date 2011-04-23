<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Base {

	public $data = array();

	/**
	* Init
	*/
	public function before()
	{
		parent::before();
		
		# Main Menu
		$this->template->current_tab = 'accounts';
		
		# Init View Data
		$this->data['odd'] = TRUE;

	}

	/**
	* Display Homepage
	*/
	public function action_index()
	{
		# template
		$this->template->title = 'Welcome';

		# output
		$this->template->content = View::factory('home',$this->data);

	}

}