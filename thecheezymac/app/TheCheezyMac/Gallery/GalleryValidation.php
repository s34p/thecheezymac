<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:07 PM
 */

namespace TheCheezyMac\Gallery;

use TheCheezyMac\Forms\FormValidator;

class GalleryValidation extends FormValidator {

    protected $rules = [
        'caption'          =>  'required',
        'image'      =>  'required'
    ];

} 