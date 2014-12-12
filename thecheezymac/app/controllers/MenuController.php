<?php

use TheCheezyMac\Menu\Menu;
use TheCheezyMac\Menu\MenuInterface;
use TheCheezyMac\Menu\MenuValidation;

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

    public function __construct(Menu $menuModel, MenuValidation $menuValidation, MenuInterface $menuInterface)
	{

        $this->menuModel = $menuModel;
        $this->menuValidation = $menuValidation;
        $this->menuInterface = $menuInterface;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $menus = $this->menuModel->orderBy('category')->get();

        $this->layout->content = View::make('private.menu.index', compact('menus'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('private.menu.create');
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

        $this->layout->content = View::make('private.menu.edit',compact('menu'));
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


    public function menuType($type = "specials")
    {
        $menus = $this->menuModel->where('category','like', $type)->get();

        $categories = $this->menuModel->select('category')->groupBy('category')->get();



        $this->layout->content = View::make('public.menu',compact('menus','categories'));
    }

}
