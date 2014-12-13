<?php

use TheCheezyMac\Blog\Blog;
use TheCheezyMac\Blog\BlogInterface;
use TheCheezyMac\Blog\BlogValidation;

class BlogController extends \BaseController {

	protected $layout = 'public.layout.default';
    /**
     * @var Blog
     */
    private $blog;
	/**
	 * @var BlogValidation
	 */
	private $blogValidation;
	/**
	 * @var BlogInterface
	 */
	private $blogInterface;


	public function __construct(Blog $blog, BlogValidation $blogValidation, BlogInterface $blogInterface)
    {

        $this->blog = $blog;
		$this->blogValidation = $blogValidation;
		$this->blogInterface = $blogInterface;
	}

    /**
	 * Display a listing of the resource.
	 * GET /blog
	 *
	 * @return Response
	 */
	public function index()
	{
		$blogs = $this->blog->orderBy('created_at')->get();

		$this->layout->content = View::make('private.blog.index', compact('blogs'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /blog/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('private.blog.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /blog
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->blogValidation->validate(Input::all());
		$this->blogInterface->add(Input::all());
		return Redirect::to('/webadmin/blog')->withSuccess('Post has been submitted successfully!');
	}

	/**
	 * Display the specified resource.
	 * GET /blog/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /blog/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$blog = $this->blog->findOrFail($id);
		$this->layout->content = View::make('private.blog.edit',compact('blog'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /blog/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$this->blogValidation->validate(Input::all());
		$this->blogInterface->update(Input::all(), $id);
		return Redirect::to('/webadmin/blog')->withSuccess('Post was updated successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /blog/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->blog->destroy($id);
		return Redirect::back()->withSuccess('Post was deleted successfully!');
	}


    public function getAllBlogs()
    {
        $blogs = $this->blog->orderBy('created_at')->get();

        $this->layout->content = View::make('public.blog.index', compact('blogs'));
    }

    public function getBlog($id)
    {
        $blog = $this->blog->findOrFail($id);
        $this->layout->content = View::make('public.blog.show', compact('blog'));
    }

}