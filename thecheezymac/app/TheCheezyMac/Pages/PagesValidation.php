<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:07 PM
 */

namespace TheCheezyMac\Pages;

use TheCheezyMac\Forms\FormValidator;

class PagesValidation extends FormValidator {

    protected $rules = [
        'title' => 'required',
        'col_num' => 'required',

    ];

} 