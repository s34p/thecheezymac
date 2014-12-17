<?php

use TheCheezyMac\Comments\Comments;
use TheCheezyMac\Comments\CommentsInterface;
use TheCheezyMac\Comments\CommentsValidation;

class CommentsController extends \BaseController {

	protected $layout = 'public.layout.default';
    /**
     * @var Comments
     */
    private $comments;
	/**
	 * @var CommentsValidation
	 */
	private $commentsValidation;
	/**
	 * @var CommentsInterface
	 */
	private $commentsInterface;


	public function __construct(Comments $comments, CommentsValidation $commentsValidation, CommentsInterface $commentsInterface)
    {

        $this->comments = $comments;
		$this->commentsValidation = $commentsValidation;
		$this->commentsInterface = $commentsInterface;
	}

    /**
	 * Display a listing of the resource.
	 * GET /comments
	 *
	 * @return Response
	 */
	public function index()
	{
		$comments = $this->comments->orderBy('visible','DESC')->get();

		$this->layout->content = View::make('private.comments.index', compact('comments'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /comments/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('private.comments.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /comments
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->commentsValidation->validate(Input::all());
		$this->commentsInterface->add(Input::all());
		return Redirect::to('/webadmin/comments')->withSuccess('Comment was submitted successfully!');
	}

	/**
	 * Display the specified resource.
	 * GET /comments/{id}
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
	 * GET /comments/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$comment = $this->comments->findOrFail($id);
		$this->layout->content = View::make('private.comments.edit',compact('comment'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /comments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$this->commentsValidation->validate(Input::all());
		$this->commentsInterface->update(Input::all(), $id);
		return Redirect::to('/webadmin/comments')->withSuccess('Comment was updated successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /comments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->comments->destroy($id);
		return Redirect::back()->withSuccess('Comment was deleted successfully!');
	}


    public function getAllComments()
    {
        $comments = $this->comments->where('visible','=',1)->orderBy(DB::raw('RAND()'))->get();

        return View::make('public.partials.comments', compact('comments'));
    }



}