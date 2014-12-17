<?php
/**
 * Created by PhpStorm.
 * User: rmork
 * Date: 12/11/2014
 * Time: 5:55 PM
 */

namespace TheCheezyMac\Comments;


class Comments extends \Eloquent {

    protected $fillable = ['author','body'];

    protected $table = 'comments';
} 