<?php

class Controller_Home extends Controller_Template
{
	/**
	 *
	 */
	public function before()
	{
		// run this first in all before methods
		parent::before();
	}

	/**
	 * 
	 */
	public function get_view()
	{
		$this->template->title = 'Home';
		$this->template->body  = View::forge('home/view');
	}
}