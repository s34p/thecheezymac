<?php

class PagesController extends BaseController {

    protected $layout = "public.layout.default";

	public function index()
	{
		$this->layout->content = View::make('public.index');
	}

	public function story()
	{
	    $this->layout->content = View::make('public.story');
	}

}
