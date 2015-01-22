<?php

use TheCheezyMac\MenuFile\MenuFile;
use TheCheezyMac\MenuFile\MenuFileValidation;

class MenuFileController extends \BaseController {

    protected $layout = "public.layout.default";
	/**
	 * @var MenuFile
	 */
	private $menuFile;
	/**
	 * @var MenuFileValidation
	 */
	private $menuFileValidation;


	/**
	 * @param MenuFile $menuFile
	 * @param MenuFileValidation $menuFileValidation
	 * @internal param $ \TheCheezyMac\Menu\MenuFile $
	 */
	public function __construct(MenuFile $menuFile, MenuFileValidation $menuFileValidation)
	{

		$this->menuFile = $menuFile;
		$this->menuFileValidation = $menuFileValidation;
	}

	public function index()
	{
		$menuFiles = $this->menuFile->get();
		$this->layout->content = View::make('private.menuFile.index',compact('menuFiles'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$menuFile = $this->menuFile->findOrFail($id);
		$this->layout->content = View::make('private.menuFile.edit',compact('menuFile'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$this->menuFileValidation->validate(Input::all());

		$menuFile = $this->menuFile->findOrFail($id);
		$menuFile->file_path = Input::get('file_path');
		$menuFile->save();

        return Redirect::to('/webadmin/menuFile')->withSuccess('Menu URL was updated!');
	}


}
