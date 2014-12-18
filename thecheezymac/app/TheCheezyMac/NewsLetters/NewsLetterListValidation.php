<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:07 PM
 */

namespace TheCheezyMac\NewsLetters;

use TheCheezyMac\Forms\FormValidator;

class NewsLetterListValidation extends FormValidator {

    protected $rules = [
        'firstName'          =>  'required',
        'lastName'          =>  'required',
        'email'      =>  'required|email'
    ];

} 