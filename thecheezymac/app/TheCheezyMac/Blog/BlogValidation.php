<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:07 PM
 */

namespace TheCheezyMac\Blog;

use TheCheezyMac\Forms\FormValidator;

class BlogValidation extends FormValidator {

    protected $rules = [
        'title' => 'required',
        'body' => 'required',
        'author' => 'required',
        'created_at'    => 'required'
    ];

} 