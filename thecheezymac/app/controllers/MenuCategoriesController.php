<?php

use TheCheezyMac\MenuCategories\MenuCategories;
use TheCheezyMac\MenuCategories\MenuCategoriesValidation;

class MenuCategoriesController extends \BaseController {

    protected $layout = "public.layout.default";
    /**
     * @var MenuCategories
     */
    private $menuCategoriesModel;
    /**
     * @var MenuCategoriesValidation
     */
    private $menuCategoriesValidation;

    public function __construct(MenuCategories $menuCategoriesModel, MenuCategoriesValidation $menuCategoriesValidation)
	{

        $this->menuCategoriesModel = $menuCategoriesModel;
        $this->menuCategoriesValidation = $menuCategoriesValidation;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $menuCategories = $this->menuCategoriesModel->orderBy('name')->get();
        $this->layout->content = View::make('private.menuCategories.index', compact('menuCategories'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('private.menuCategories.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->menuCategoriesValidation->validate(Input::all());

        $this->menuCategoriesModel->name = Input::get('name');
		$this->menuCategoriesModel->slug = Input::get('slug');
		$this->menuCategoriesModel->save();

        return Redirect::to('/webadmin/category')->withSuccess('Category was added successfully');

	}


	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$category = $this->menuCategoriesModel->findOrFail($id);

        $this->layout->content = View::make('private.menuCategories.edit',compact('category'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$this->menuCategoriesValidation->validate(Input::all());

		$category = $this->menuCategoriesModel->findOrFail($id);
		$category->name = Input::get('name');
		$category->slug = Input::get('slug');
		$category->save();
		return Redirect::to('webadmin/category')->withSuccess('Category was updated!');


	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$menus = $this->menuCategoriesModel->with('menu')->find($id);

		foreach($menus->menu as $menu)
		{
			if($menu->id)
			{
				$errorArr[] = $menu->name;
			}
		}
		if(!empty($errorArr))
		{
			return Redirect::back()
				->with('error',"the category cannot be deleted because it is related to active items in your menu. Please change the following items category then come back and delete the category.")
				->with('arrayErrors', $errorArr);
		}

		$this->menuCategoriesModel->destroy($id);
		return Redirect::back()->withSuccess('Category has been deleted');


		//$this->menuCategoriesModel->destroy($id);
		//return Redirect::back()->withSuccess('Category was deleted!');
	}


}
