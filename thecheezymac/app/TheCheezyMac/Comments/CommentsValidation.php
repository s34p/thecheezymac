<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:07 PM
 */

namespace TheCheezyMac\Comments;

use TheCheezyMac\Forms\FormValidator;

class CommentsValidation extends FormValidator {

    protected $rules = [
        'body' => 'required',
        'visible' => 'required'
    ];

} 