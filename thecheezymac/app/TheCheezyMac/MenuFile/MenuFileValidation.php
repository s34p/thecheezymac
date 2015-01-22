<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:07 PM
 */

namespace TheCheezyMac\MenuFile;

use TheCheezyMac\Forms\FormValidator;

class MenuFileValidation extends FormValidator {

    protected $rules = [
        'file_path'          =>  'required',
    ];

} 