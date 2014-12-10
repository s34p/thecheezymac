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

    public function menu()
    {
    	$this->layout->content = View::make('public.menu');
    }

    public function specials()
    {
    	$this->layout->content = View::make('public.specials');
    }

    public function club()
    {
    	$this->layout->content = View::make('public.club');
    }

    public function catering()
    {
    	$this->layout->content = View::make('public.catering');
    }

    public function giftcard()
    {
    	$this->layout->content = View::make('public.giftcard');
    }

    public function contactus()
    {
    	$this->layout->content = View::make('public.contactus');
    }

    public function app()
    {
    	$this->layout->content = View::make('public.app');
    }

    public function pressMedia()
    {
    	$this->layout->content = View::make('public.pressMedia');
    }

    public function franchise()
    {
    	$this->layout->content = View::make('public.franchise');
    }


    /**
     * Process Comment's Form
     */
    public function comments()
    {
    	$rules = [
            'phone'    =>  'required',
            'comment'     =>  'required',
            'email'         =>  'required|email'
        ];

        $validation = Validator::make(Input::all(), $rules);

        if($validation->fails())
        {
            return Response::json([
                'success' => false,
                'errors' => $validation->getMessageBag()->toArray()
            ], 400);
        }

        return Response::json([
            'success'   =>  true
        ], 200);
    }

    public function dashboard()
    {
    	$this->layout->content = View::make('private.dashboard');
    }



}
