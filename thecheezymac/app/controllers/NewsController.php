<?php

use TheCheezyMac\News\News;
use TheCheezyMac\News\NewsInterface;
use TheCheezyMac\News\NewsValidation;

class NewsController extends \BaseController {

	protected $layout = 'public.layout.default';
    /**
     * @var News
     */
    private $news;
	/**
	 * @var NewsValidation
	 */
	private $newsValidation;
	/**
	 * @var NewsInterface
	 */
	private $newsInterface;


	public function __construct(News $news, NewsValidation $newsValidation, NewsInterface $newsInterface)
    {

        $this->news = $news;
		$this->newsValidation = $newsValidation;
		$this->newsInterface = $newsInterface;
	}

    /**
	 * Display a listing of the resource.
	 * GET /news
	 *
	 * @return Response
	 */
	public function index()
	{
		$news = $this->news->orderBy('created_at')->get();

		$this->layout->content = View::make('private.news.index', compact('news'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /news/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('private.news.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /news
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->newsValidation->validate(Input::all());
		$this->newsInterface->add(Input::all());
		return Redirect::to('/webadmin/news')->withSuccess('Post has been submitted successfully!');
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
		$news = $this->news->findOrFail($id);
		$this->layout->content = View::make('private.news.edit',compact('news'));
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
		$this->newsValidation->validate(Input::all());
		$this->newsInterface->update(Input::all(), $id);
		return Redirect::to('/webadmin/news')->withSuccess('Post was updated successfully!');
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
		$this->news->destroy($id);
		return Redirect::back()->withSuccess('Post was deleted successfully!');
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