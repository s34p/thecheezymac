<?php
/**
 * Created by PhpStorm.
 * User: rmork
 * Date: 12/11/2014
 * Time: 5:55 PM
 */

namespace TheCheezyMac\MenuCategories;


class MenuCategories extends \Eloquent {


    protected $table = 'menu_categories';

    public function menu()
    {
        return $this->hasMany('TheCheezyMac\Menu\Menu','category_id');
    }

} 