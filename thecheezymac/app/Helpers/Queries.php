<?php
/**
 * Created by PhpStorm.
 * User: rrafia
 * Date: 12/22/2014
 * Time: 8:06 AM
 */

use TheCheezyMac\MenuCategories\MenuCategories;

class Queries {


    /**
     * @param $slug
     */
    public static function menuCategory($slug)
    {
        $name = MenuCategories::where('slug','LIKE',$slug)->get();

        foreach($name as $n)
        {
            return $n->name;
        }
    }


}