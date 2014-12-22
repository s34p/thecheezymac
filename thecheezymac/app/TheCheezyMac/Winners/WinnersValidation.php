<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:07 PM
 */

namespace TheCheezyMac\Winners;

use TheCheezyMac\Forms\FormValidator;

class WinnersValidation extends FormValidator {

    protected $rules = [
        'fullName'          =>  'required',
        'recipeName'        =>  'required'
    ];

} 