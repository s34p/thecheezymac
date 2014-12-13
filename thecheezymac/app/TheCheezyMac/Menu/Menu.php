<?php
/**
 * Created by PhpStorm.
 * User: rmork
 * Date: 12/11/2014
 * Time: 5:55 PM
 */

namespace TheCheezyMac\Menu;


class Menu extends \Eloquent {

    protected $fillable = ['name','description','image','category_id'];

    protected $table = 'menu';



} 