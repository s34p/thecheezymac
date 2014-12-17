<?php
/**
 * Created by PhpStorm.
 * User: rmork
 * Date: 12/11/2014
 * Time: 5:55 PM
 */

namespace TheCheezyMac\Gallery;


class Gallery extends \Eloquent {

    protected $fillable = ['caption','image'];

    protected $table = 'gallery';



} 