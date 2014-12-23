<?php

use TheCheezyMac\Merchandise\Merchandise;
use TheCheezyMac\Merchandise\MerchandiseInterface;
use TheCheezyMac\Merchandise\MerchandiseValidation;

class MerchandiseController extends \BaseController {

    protected $layout = "public.layout.default";
    /**
     * @var MerchandiseInterface
     */
    private $merchandiseInterface;
    /**
     * @var MerchandiseValidation
     */
    private $merchandiseValidation;
    /**
     * @var Merchandise
     */
    private $merchandiseModel;

    public function __construct(MerchandiseInterface $merchandiseInterface, MerchandiseValidation $merchandiseValidation, Merchandise $merchandiseModel)
	{
        $this->merchandiseInterface = $merchandiseInterface;
        $this->merchandiseValidation = $merchandiseValidation;
        $this->merchandiseModel = $merchandiseModel;
    }

    /**
	 * Display a listing of the resource.
	 * GET /merchandise
	 *
	 * @return Response
	 */
	public function index()
	{
		$merchandise = $this->merchandiseModel->orderBy('item_name','ASC')->get();

        $this->layout->content = View::make('private.merchandise.index', compact('merchandise'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /merchandise/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $this->layout->content = View::make('private.merchandise.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /merchandise
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->merchandiseValidation->validate(Input::all());

        $this->merchandiseInterface->add(Input::all());

        return Redirect::to('/webadmin/merchandise')->withSuccess('Item was added successfully');
    }

	/**
	 * Display the specified resource.
	 * GET /merchandise/{id}
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
	 * GET /merchandise/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$merchandise = $this->merchandiseModel->findOrFail($id);

		$this->layout->content = View::make('private.merchandise.edit',compact('merchandise'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /merchandise/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $this->merchandiseValidation->validate(Input::all());

        $this->merchandiseInterface->update(Input::all(), $id);

        return Redirect::to('/webadmin/merchandise')->withSuccess('Item was updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /merchandise/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $this->merchandiseModel->destroy($id);

        return Redirect::back()->withSuccess('Item was removed successfully');
	}

    public function getMerchandise()
    {
        $merchandise = $this->merchandiseModel->orderBy('item_name','ASC')->get();

        $this->layout->content = View::make('public.merchandise', compact('merchandise'));
    }

}