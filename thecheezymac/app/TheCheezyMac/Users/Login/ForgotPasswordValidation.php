<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 7:21 PM
 */

namespace TheCheezyMac\Users\Login;

use TheCheezyMac\Forms\FormValidator;

class ForgotPasswordValidation extends FormValidator {
    protected $rules = [
        'email' => 'required|email',
    ];
} 