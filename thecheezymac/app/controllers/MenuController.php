<?php

use TheCheezyMac\Menu\Menu;
use TheCheezyMac\Menu\MenuInterface;
use TheCheezyMac\Menu\MenuValidation;
use TheCheezyMac\MenuCategories\MenuCategories;

class MenuController extends \BaseController {

    protected $layout = "public.layout.default";
    /**
     * @var Menu
     */
    private $menuModel;
    /**
     * @var MenuValidation
     */
    private $menuValidation;
    /**
     * @var MenuInterface
     */
    private $menuInterface;
	/**
	 * @var MenuCategories
	 */
	private $categories;

	public function __construct(Menu $menuModel, MenuValidation $menuValidation, MenuInterface $menuInterface, MenuCategories $categories)
	{

        $this->menuModel = $menuModel;
        $this->menuValidation = $menuValidation;
        $this->menuInterface = $menuInterface;
		$this->categories = $categories;
	}


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$menus = DB::table('menu')
			->join('menu_categories', 'menu.category_id','=','menu_categories.id')
			->select('*','menu.name as menu_name','menu_categories.name as category_name','menu.id as menu_id','menu.price as price')
			->get();


        $this->layout->content = View::make('private.menu.index', compact('menus'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = $this->categories->orderBy('name','ASC')->get();
		$this->layout->content = View::make('private.menu.create', compact('categories'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->menuValidation->validate(Input::all());

        $this->menuInterface->add(Input::all());

        return Redirect::to('/webadmin/menu')->withSuccess('Menu Item was added successfully');

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
		$menu = $this->menuModel->findOrFail($id);
		$categories = $this->categories->orderBy('name','ASC')->get();


		$this->layout->content = View::make('private.menu.edit',compact('menu','categories'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$this->menuValidation->validate(Input::all());

        $this->menuInterface->update(Input::all(), $id);

        return Redirect::to('/webadmin/menu')->withSuccess('Menu Item was updated!');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->menuModel->destroy($id);

        return Redirect::back()->withSuccess('Menu item was deleted!');
	}


    public function menuType($type = "BuildYourOwn")
    {
		$menus = DB::table('menu')
			->join('menu_categories', 'menu.category_id','=','menu_categories.id')
			->select('*','menu.name as menu_name','menu_categories.name as category_name','menu.id as menu_id')
			->where('menu_categories.slug','=',$type)
			->get();

        $categories = $this->categories->groupBy('slug')->orderBy('order','ASC')->get();


        $this->layout->content = View::make('public.menu',compact('menus','categories'));
    }

}
