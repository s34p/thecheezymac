<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:07 PM
 */

namespace TheCheezyMac\Merchandise;

use TheCheezyMac\Forms\FormValidator;

class MerchandiseValidation extends FormValidator {

    protected $rules = [
        'item_name'             =>          'required',
        'price'                 =>          'required',
    ];

} 