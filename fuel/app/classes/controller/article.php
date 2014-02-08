<?php

class Controller_Article extends Controller_Template
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
	 * View and Article by url
	 */
	public function get_view($url)
	{
		// if (! $article = Model_Article::get_by_url($url))
		// {
		// 	throw new HttpNotFoundException;
		// }

		$this->template->title = 'Article';
		$this->template->body  = View::forge('article/view', [
			'article' => null, //$article,
		]);
	}
}