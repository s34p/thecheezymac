<?php

use TheCheezyMac\Winners\Winner;
use TheCheezyMac\Winners\WinnersInterface;
use TheCheezyMac\Winners\WinnersValidation;

class WinnersController extends \BaseController {

    protected $layout = "public.layout.default";
    /**
     * @var WinnersInterface
     */
    private $winnersInterface;
    /**
     * @var WinnersValidation
     */
    private $winnersValidation;
    /**
     * @var Winner
     */
    private $winnerModel;

    public function __construct(WinnersInterface $winnersInterface, WinnersValidation $winnersValidation, Winner $winnerModel)
	{
        $this->winnersInterface = $winnersInterface;
        $this->winnersValidation = $winnersValidation;
        $this->winnerModel = $winnerModel;
    }

    /**
	 * Display a listing of the resource.
	 * GET /winners
	 *
	 * @return Response
	 */
	public function index()
	{
		$winners = $this->winnerModel->orderBy('winningDate','DESC')->get();

        $this->layout->content = View::make('private.winners.index', compact('winners'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /winners/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $this->layout->content = View::make('private.winners.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /winners
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->winnersValidation->validate(Input::all());

        $this->winnersInterface->add(Input::all());

        return Redirect::to('/webadmin/winners')->withSuccess('Winner was added successfully');
    }

	/**
	 * Display the specified resource.
	 * GET /winners/{id}
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
	 * GET /winners/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$winner = $this->winnerModel->findOrFail($id);

		$this->layout->content = View::make('private.winners.edit',compact('winner'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /winners/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $this->winnersValidation->validate(Input::all());

        $this->winnersInterface->update(Input::all(), $id);

        return Redirect::to('/webadmin/winners')->withSuccess('Winner was updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /winners/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $this->winnerModel->destroy($id);

        return Redirect::back()->withSuccess('Winner was removed successfully');
	}

    public function getWinners()
    {
        $winners = $this->winnerModel->orderBy('winningDate','DESC')->get();

        $this->layout->content = View::make('public.winners', compact('winners'));
    }

}