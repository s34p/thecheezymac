<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:07 PM
 */

namespace TheCheezyMac\Menu;

use TheCheezyMac\Forms\FormValidator;

class MenuValidation extends FormValidator {

    protected $rules = [
        'name'          =>  'required',
        'description'   =>  'required',
        'category'      =>  'required'
    ];

} 