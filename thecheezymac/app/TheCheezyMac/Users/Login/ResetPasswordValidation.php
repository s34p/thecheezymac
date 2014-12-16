<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 7:21 PM
 */

namespace TheCheezyMac\Users\Login;

use TheCheezyMac\Forms\FormValidator;

class ResetPasswordValidation extends FormValidator {
    protected $rules = [
        'password' => 'required|confirmed|min:8',
        'password_confirmation' => 'required'
    ];
} 