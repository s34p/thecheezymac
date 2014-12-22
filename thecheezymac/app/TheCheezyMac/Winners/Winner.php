<?php
/**
 * Created by PhpStorm.
 * User: rmork
 * Date: 12/11/2014
 * Time: 5:55 PM
 */

namespace TheCheezyMac\Winners;


class Winner extends \Eloquent {

    protected $fillable = ['fullName','image','recipeName','ingredients'];

    protected $table = 'winners';

} 