<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:07 PM
 */

namespace TheCheezyMac\News;

use TheCheezyMac\Forms\FormValidator;

class NewsValidation extends FormValidator {

    protected $rules = [
        'title' => 'required',
        'body' => 'required',
        'author' => 'author',
        'created_at'    => 'created_at'
    ];

} 