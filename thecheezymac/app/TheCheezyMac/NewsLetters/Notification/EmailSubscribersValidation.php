<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:07 PM
 */

namespace TheCheezyMac\NewsLetters\Notification;

use TheCheezyMac\Forms\FormValidator;

class EmailSubscribersValidation extends FormValidator {

    protected $rules = [
        'title'          =>  'required',
        'body'          =>  'required',
    ];

} 