<?php
/**
 * Created by PhpStorm.
 * User: rrafia
 * Date: 12/22/2014
 * Time: 8:06 AM
 */

use TheCheezyMac\MenuCategories\MenuCategories;
use TheCheezyMac\MenuFile\MenuFile;

class Queries {


    /**
     * @param $slug
     */
    public static function menuCategory($slug)
    {
        $name = MenuCategories::where('slug','LIKE',$slug)->remember(10)->get();

        foreach($name as $n)
        {
            if($n->name == "Food For Thought")
            {
            	return $n->name."<br><small>CHEF'S SPECIALTIES</small>";
            }
            return $n->name;
        }
    }

    public static function downloadMenu()
    {
        $file = MenuFile::first();

        return $file->file_path;
    }


}