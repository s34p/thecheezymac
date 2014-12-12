<?php

use TheCheezyMac\News\News;

class NewsController extends \BaseController {

	protected $layout = 'public.layout.default';
    /**
     * @var News
     */
    private $news;


    public function __construct(News $news)
    {

        $this->news = $news;
    }

    /**
	 * Display a listing of the resource.
	 * GET /news
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /news/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /news
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /news/{id}
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
	 * GET /news/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /news/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /news/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


    public function getAllNews()
    {
        $news = $this->news->orderBy('created_at')->get();

        $this->layout->content = View::make('public.news.index', compact('news'));
    }

    public function getNews($id)
    {
        $news = $this->news->findOrFail($id);
        $this->layout->content = View::make('public.news.show', compact('news'));
    }

}