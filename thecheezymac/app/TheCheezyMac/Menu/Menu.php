<?php
/**
 * Created by PhpStorm.
 * User: rmork
 * Date: 12/11/2014
 * Time: 5:55 PM
 */

namespace TheCheezyMac\Menu;


class Menu extends \Eloquent {

    protected $fillable = ['name','price','description','image','category_id','order'];

    protected $table = 'menu';

    public function menuCategory()
    {
        return $this->belongsTo('TheCheezyMac\MenuCategories\MenuCategories','category_id');
    }

} 