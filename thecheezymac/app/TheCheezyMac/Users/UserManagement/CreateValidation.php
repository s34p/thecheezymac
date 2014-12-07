<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:07 PM
 */

namespace TheCheezyMac\Users\UserManagement;

use TheCheezyMac\Forms\FormValidator;

class CreateValidation extends FormValidator {

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:users',
        'password'=>'required|confirmed|min:8',
        'password_confirmation'=>'required',
    ];

} 