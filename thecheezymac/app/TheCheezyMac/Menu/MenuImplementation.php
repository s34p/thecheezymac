<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:04 PM
 */

namespace TheCheezyMac\Menu;

class MenuImplementation implements MenuInterface{

    /**
     * @var Menu
     */
    private $menuModel;

    public function __construct(Menu $menuModel)
    {

        $this->menuModel = $menuModel;
    }

    public function add(array $inputs)
    {
        $this->menuModel->name = $inputs['name'];
        $this->menuModel->description = $inputs['description'];
        if(isset($inputs['image']))
        {
            $this->menuModel->image = $inputs['image'];
        }
        $this->menuModel->category = $inputs['category'];
        return $this->menuModel->save();
    }

    public function update(array $inputs, $menuId)
    {
        $menu = $this->menuModel->findOrFail($menuId);

        $menu->name = $inputs['name'];
        $menu->description = $inputs['description'];
        $menu->category = $inputs['category'];
        if(isset($inputs['image']))
        {
            $menu->image = $inputs['image'];
        }

        return $menu->save();
    }


} 