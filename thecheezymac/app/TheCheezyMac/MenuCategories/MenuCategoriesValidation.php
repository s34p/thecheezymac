<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:07 PM
 */

namespace TheCheezyMac\MenuCategories;

use TheCheezyMac\Forms\FormValidator;

class MenuCategoriesValidation extends FormValidator {

    protected $rules = [
        'name'          =>  'required',
        'slug'          =>  'required',
    ];

} 